<?php
/**
 */
/*
* @property string sort_by_taxonomy
*/
Class Eemjii_WP_Taxonomy_Query extends Eemjii_WP_Query {

    public $taxonomy = 'category';

    public function __construct ($args) {
        foreach($args as $key => $val) {

            if(isset($this->{$key})) {
                $this->{$key} = $val;
            }
        }
    }

    protected function get_taxonomies ($taxonomy) {
        $taxonomy_terms = get_terms($taxonomy, array(
            'hide_empty' => 0,
            'fields' => 'ids'
        ));
        // Use the new tax_query WP_Query argument (as of 3.1)
        $taxonomy_query = new WP_Query(array(
            'tax_query' => array(
                array(
                    'taxonomy' => $taxonomy,
                    'field' => 'id',
                    'terms' => $taxonomy_terms,
                ),
            ),
        ));
        // Transverse through $taxonomy_query to find and store taxonomy id list
        $taxonomy_list_id = $taxonomy_query->query['tax_query'][0]['terms'];
        // Create empty array which will late store each individual taxonomy object
        $taxonomy_list_object = array();
        // Loop through the $taxonomy_list_id array
        for ( $i = 0; $i < count($taxonomy_list_id); $i++ ) {
            // Get the individual taxonomy object
            $this_taxonomy = get_term((int)$taxonomy_list_id[$i],$taxonomy);
            // Checking IF this taxonomy object IS NOT the default 'Uncategorized' taxonomy
            if ($this_taxonomy->name !== 'Uncategorized') {
                // Append this taxonomy object to the $taxonomy_list_object array() defined above
                array_push($taxonomy_list_object, $this_taxonomy);
            }
        };

        // resetting the WP_Query to avoid conflicting errors
        wp_reset_query();

        // return the array of $taxonomy objects
        return $taxonomy_list_object;
    }

    protected function get_posts_by_taxonomy ($post_type, $taxonomy, $reset = true) {
        $args = array(
            'post_type' => $post_type,
            'category_name' => $taxonomy
        );
        $query_object = new WP_Query( $args );

        if ($reset) {
            // resetting the WP_Query to avoid conflicting errors
            wp_reset_query();
        }
        return $query_object;
    }

    public function loop_by_taxonomies () {
        $taxonomy = $this->taxonomy;

        $taxonomies_obj = $this->get_taxonomies($taxonomy);

        for ($i = 0; $i < count($taxonomies_obj); $i++ ){
            $this_taxonomy_obj = $taxonomies_obj[$i];
            $the_query = $this->get_posts_by_taxonomy( $this->_post_type, $this_taxonomy_obj -> slug );

            if ($the_query -> have_posts()):
                ?>
                    <?php
                    echo '<h2>';
                    echo $this_taxonomy_obj->name;
                    echo '</h2>';
                    $this->loop();
                    ?>
            <?php
            endif;
            // Does this query have any posts?

            // resetting the WP_Query to avoid conflicting errors
            wp_reset_query();
        }
    }
}

