<?php
/*
    Template Name: Resources
*/
?>
<!-- Resources -->

<?php get_header(); ?>

<?php

function eemjii_get_taxonomies ($taxonomy) {

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

function eemjii_get_posts_by_taxonomy ($taxonomy, $reset = true) {
    $args = array(
        'post_type' => 'eemjii_resources',
        'category_name' => $taxonomy
    );
    $query_object = new WP_Query( $args );

    if ($reset) {
        // resetting the WP_Query to avoid conflicting errors
        wp_reset_query();
    }
    return $query_object;
}

function eemjii_loop_taxonomies ($taxonomy) {
    $taxonomies_obj = eemjii_get_taxonomies($taxonomy);

    for ($i = 0; $i < count($taxonomies_obj); $i++ ){
        $this_taxonomy_obj = $taxonomies_obj[$i];
        $the_query = eemjii_get_posts_by_taxonomy($this_taxonomy_obj->slug);

        if ($the_query -> have_posts()):
        ?>
            <div class='container'>

                <?php
                    echo '<h2>';
                    echo $this_taxonomy_obj->name;
                    echo '</h2>';
                     for ( $j = 0; $the_query->have_posts(); $j++ ) : $the_query->the_post();
                        get_template_part('template','resources');
                    endfor;
                ?>

            </div>

        <?php
        endif;
        // Does this query have any posts?

        // resetting the WP_Query to avoid conflicting errors
        wp_reset_query();
    }
}


eemjii_loop_taxonomies('category');


?>
<?php get_footer(); ?>