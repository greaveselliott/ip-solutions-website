<?php
/*
 * Eemjii-WP-Query.php
 * Class for any WordPress post type that matches the given arguments
 * --------------------------------------
 * Author: Elliott Matthew Greaves
 * Author URI: http://ww.\w
*/


/*
 * @property string $_post_type
 * @property string $_post_template_prefix
 * @property string $_post_template
 * @property number $_posts_per_page
 * @property number $_posts_per_row
 * @property number $_columns_per_row
 * @property boolean $_loop_wrapper
*/
Class Eemjii_WP_Query {

    protected $_the_query;                         // The WP_Query object - defined later

    private $_column_size              = 0;
    private $_row_has_empty_space      = false;
    private $_is_open_row                 = true;
    private $_is_close_row                = false;
    private $_total_columns            = 12;

    // Class Defaults
    protected $_post_type             = '';
    protected $_post_template_prefix  = 'post';
    protected $_post_template_part    = '';
    protected $_posts_per_page        = 10;
    protected $_posts_per_row         = 4;
    protected $_loop_wrapper          = true;
    protected $_row_wrapper           = true;

    // Set Properties
    public function __construct ($args) {
        foreach($args as $key => $val) {

            if(isset($this->{$key})) {
                $this->{$key} = $val;
            }
        }
        // Set column widths
        $this -> configure_columns();
    }

    private function configure_columns () {
        $total_columns    = $this -> _total_columns;
        $posts_per_row = $this -> _posts_per_row;

        // Divides $total_columns by $columns_per_row
        $this -> _column_size = round($total_columns / $posts_per_row);

        $this -> _row_has_empty_space =
            !$posts_per_row % $total_columns ? // Is modulo Fa;se or equal to 0
                true:  // True:     Set _row_has_empty_space to True
                false; // False:    Set _row_has_empty_space to False
    }

    public function opening_wrapper (){
        ?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <?
    }

    public function closing_wrapper () {
        ?>
                                </div><!-- END .col-lg-12 .col-md-12 .col-sm-12 .col-xs-12 -->
                            </div><!-- END .row -->
                        </div><!-- END .container -->
                    </div><!-- END .col-lg-12 .col-md-12 .col-sm-12 .col-xs-12 -->
                </div><!-- END .row -->
            </div><!-- END .container-fluid -->
        <?php
    }

    private function is_open_row ($i) {
        if ( ($i) % $this->_posts_per_row == 0 ) :
            $boolean = $this->_is_open_row = true;
        else:
            $boolean = $this->_is_open_row = false;
        endif;

        return $boolean;
    }

    private function is_close_row ($i) {
        if ( ($i) % $this->_posts_per_row == ($this->_posts_per_row-1) ) :
            $boolean = $this->_is_close_row = true;
        else:
            $boolean = $this->_is_close_row = false;
        endif;

        return $boolean;
    }

    protected function open_row () {
        ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <?php
    }

    protected function close_row () {
        ?>
                </div><!-- END .col-lg-12 .col-md-12 .col-sm-12 .col-xs-12 -->
            </div><!-- END .row -->
        </div><!-- END .container -->
        <?php
    }

    public function loop () {
        // SET: Local Scope - $post_type
        // -- Properties defined in the local scope as "$post_type" to reduce object transversing
        $post_type      = $this -> _post_type;
		$posts_per_page = $this -> _posts_per_page;
        $loop_wrapper   = $this -> _loop_wrapper;
        $row_wrapper    = $this -> _row_wrapper;

        // Set: The loop - Arguments
        $args = array (
            'post_type'         => $post_type,
            'posts_per_page'    => $posts_per_page
        );
        // Call: The loop - WP_Query
        // -- Property has also been cached in the local scope as "$query" to reduce object transversing
        $the_query   = $this -> _the_query = new WP_Query( $args );

        // Does this query have any posts?
        if ($the_query -> have_posts()):

            // Are we using a loop wrapper?
            if ($loop_wrapper):
                // Call the opening_wrapper method
                // NOTE: Extend this class to override the default template;
                $this -> opening_wrapper();
            endif;

            // Loop over posts
            for ( $i = 0; $the_query->have_posts(); $i++ ) : $the_query->the_post();

                $last_loop = $i == count($the_query->posts)-1 ? true : false;

                // Are we using a row wrapper?
                if ($row_wrapper):
                    if ($this -> is_open_row($i) || $this -> _is_open_row) :
                        echo 'POST OPEN';
                        $this -> open_row();
                    endif;
                endif;

                    //echo $this->_post_template_part;
                    get_template_part($this->_post_template_prefix, $this->_post_template_part);

                // Are we using a row wrapper?
                if ($row_wrapper):
                    if ($this -> is_close_row($i) || $this -> _is_close_row || $last_loop):
                        echo 'POST CLOSE';
                        $this -> close_row();
                    endif;
                endif;

            endfor;
            // Are we using a loop wrapper?
            if ($loop_wrapper):
                // Call the closing_wrapper method
                // NOTE: Extend this class to override the default template;
                $this -> closing_wrapper();
            endif;
        endif;
        // Resetting Query
        wp_reset_query();
    }
}