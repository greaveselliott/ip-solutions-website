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

// View
function eemjii_loop_taxonomies ($taxonomy) {

    $taxonomies_obj = eemjii_get_taxonomies($taxonomy);



    for ($i = 0; $i < count($taxonomies_obj); $i++ ){
        $this_taxonomy_obj = $taxonomies_obj[$i];
        $the_query = new WP_Query(
            array(
                'post_type'     => 'eemjii_resources',
                'category_name' => $this_taxonomy_obj->slug
            )
        );

        if ($the_query -> have_posts()):
            ?>
            <div class="mix <?php echo $this_taxonomy_obj->slug?>" data-myorder="<?php echo $i; ?>">
                <div>
                    <div>
                        <?php
                        echo '<h2>' .$this_taxonomy_obj->name . '</h2>';
                        ?>
                    </div>
                </div>
                <div>
                    <div>
                            <?php
                            for ( $j = 0; $the_query->have_posts(); $j++ ) : $the_query->the_post();
                                $the_query2 = get_posts(array(
                                    'post_type'         => 'eemjii_services',
                                    'meta_query'        => array(
                                        array(
                                            'key'       => 'related_services',           // name of custom field
                                            'value'     => '"' . get_the_ID() . '"',// matches exaclty "123", not just 123. This prevents a match for "1234"
                                            'compare'   => 'LIKE'
                                            )
                                        )
                                    )
                                );
                                echo '<pre>';
                                print_r($the_query2);
                                echo '</pre>';
                                echo '<div>';
                                    get_template_part('template','resources');
                                echo '</div>';
                            endfor;
                            ?>
                    </div>
                </div>
            </div>

        <?php
        endif;
        // Does this query have any posts?

        // resetting the WP_Query to avoid conflicting errors
        wp_reset_query();
    }
}

function eemjii_get_related_posts ($post_type, $custom_field) {
    $the_query = get_posts(array(
        'post_type'         => $post_type,
        'meta_query'        => array(
            array(
                'key'       => $custom_field,           // name of custom field
                'value'     => '"' . get_the_ID() . '"',// matches exaclty "123", not just 123. This prevents a match for "1234"
                'compare'   => 'LIKE'
            )
        )
    ));
    $result = array();
    if( $the_query ):

            foreach( $the_query as $post ):
                array_push($result, $post->post_name ); ?>
            <?php endforeach;
    endif;

    return $result;
}


/*
 *      $ids = get_field($custom_field, false, false);
        array(
            'post_type'      	=> $post_type,
            'posts_per_page'	=> 0,
            'post__in'		    => $ids,
            'post_status'		=> 'any',
            'orderby'        	=> 'rand',
        )*/

function eemjii_related_post_filter ($wp_query_args) {
    $the_query = new WP_Query($wp_query_args);

    if ($the_query -> have_posts()):
        echo '<select>';
            for ( $j = 0; $the_query->have_posts(); $j++ ) : $the_query->the_post();
                echo '<option value="'. get_the_title() .'">' . get_the_title(). '</option>';
            endfor;
        echo '</select>';
    endif;
    // resetting the WP_Query to avoid conflicting errors
    wp_reset_query();
}

function eemjii_related_taxonomy_filter ($taxonomy) {
    $taxonomies_obj = eemjii_get_taxonomies($taxonomy);
    echo '<select class="mix-filter-categories">
            <option class="filter" data-filter="all" value="all">All</option>';
        for ($i = 0; $i < count($taxonomies_obj); $i++ ):
            echo '<option
                    class="filter"
                    data-filter=".'.    $taxonomies_obj[$i]->name .'"
                    value="'.           $taxonomies_obj[$i]->slug .
                    '">' .
                    $taxonomies_obj[$i] ->  name.'
                </option>';
        endfor;
    echo '</select>';
}

?>
    <style>
        .mix-it-up .mix{
            display: none;
        }
    </style>
<div class="container">
<?php
eemjii_related_taxonomy_filter('category');

eemjii_related_post_filter(
    array(
        'post_type'      	=> 'eemjii_services',
        'posts_per_page'	=> 0,
        'post__in'		    => get_field('related_services', false, false),
        'post_status'		=> 'any',
        'order'             => 'ASC',
        'orderby'        	=> 'title'
    )
);

eemjii_related_post_filter(
    array(
        'post_type'      	=> 'eemjii_solutions',
        'posts_per_page'	=> 0,
        'post__in'		    => get_field('related_solutions', false, false),
        'post_status'		=> 'any',
        'order'             => 'ASC',
        'orderby'        	=> 'title'
    )
);
?>
</div>
<div class="container">
<div class="row">
    <div class="mix-it-up">
    <?php
    eemjii_loop_taxonomies('category');
    ?>
    </div>
    </div>
</div>
<?php get_footer(); ?>