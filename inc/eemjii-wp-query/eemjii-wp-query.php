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
*/
Class Eemjii_WP_Query {

    protected $_the_query;                         // The WP_Query object - defined later

    // Class Defaults
    protected $_post_type             = '';
    protected $_post_template_prefix  = 'post';
    protected $_post_template_part    = '';
    protected $_posts_per_page        = 10;

    // Set Properties
    public function __construct ($args) {
        foreach($args as $key => $val) {

            if(isset($this->{$key})) {
                $this->{$key} = $val;
            }
        }
    }

    public function loop () {
        // SET: Local Scope - $post_type
        // -- Property also defined in the local scope as "$post_type" to reduce number of object calls
        $post_type = $this -> _post_type;

        // Set: The loop - Arguments
        $args = array(
            'post_type'         => $post_type,
            'posts_per_page'    => $this -> _posts_per_page
        );
        // Call: The loop - WP_Query
        // -- Property has also been cached in the local scope as "$query" to reduce object transversing
        $the_query   = $this -> _the_query = new WP_Query( $args );

        if ($the_query -> have_posts()):

            for ( $i = 0; $the_query->have_posts(); $i++ ) : $the_query->the_post();

                //echo $this->_post_template_part;
                get_template_part($this->_post_template_prefix, $this->_post_template_part);

            endfor;

        endif;

        // Resetting Query
        wp_reset_query();
    }
}