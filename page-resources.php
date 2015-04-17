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
        )
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
function eemjii_loop_resources ($taxonomy) {

    $taxonomies_obj = eemjii_get_taxonomies($taxonomy);

    //    echo '<pre>';
    //    print_r($taxonomies_obj);
    //    echo '</pre>';

    for ($i = 0; $i < count($taxonomies_obj); $i++ ){
        $this_taxonomy_obj = $taxonomies_obj[$i];
        $the_query = new WP_Query(
            array(
                'post_type'     => 'eemjii_resources',
                'category_name' => $this_taxonomy_obj->slug
            )
        );
            ?>
            <div class="mix <?php echo $this_taxonomy_obj->slug?>" data-myorder="<?php echo $i; ?>">
                <div class="row">
                    <div class="col-sm-12">
                        <?php
                        echo '<h2>' .$this_taxonomy_obj->name . '</h2>';
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="mix-it-up-sub">
                            <div class="row">
                                <?php
                                    while ($the_query->have_posts()) : $the_query->the_post();
                                        $related_services = eemjii_get_related_posts('eemjii_services','related_services');

                                        $related_services_class = eemjii_set_related_post_classes($related_services, 'service-');
                                        echo '<div class="mix-service '.$related_services_class.'">';
                                        get_template_part('template','resources');
                                        echo '</div>';
                                    endwhile;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php
        // Does this query have any posts?

        // resetting the WP_Query to avoid conflicting errors
        wp_reset_query();
    }
}

function eemjii_get_related_posts ($post_type, $custom_field) {
    $the_ID = get_field($custom_field,false , false);

    if (count($the_ID) > 0):
        $the_query = new WP_Query(array(
            'post_type'      	=> $post_type,
            'posts_per_page'	=> 0,
            'post__in'		    => $the_ID,
            'post_status'		=> 'any',
            'order'             => 'ASC',
            'orderby'        	=> 'title'
        ));


        return $the_query->posts;
    endif;

}

function eemjii_set_related_post_classes ($related_posts, $prefix ='') {
    $post_count = count($related_posts);
    $classes = '';
    for ( $i = 0; $i < $post_count; $i++ ) {
        $classes .= ' '.$prefix .$related_posts[$i]->post_name;
    }
    return $classes;
}

function eemjii_related_post_filter2 ($related_posts, $prefix ='') {
    $post_count = count($related_posts);
    $mark_up = '';
    $mark_up .= '<select>';
    for ( $i = 0; $i < $post_count; $i++ ) {
        $mark_up .= '<option value="'.$prefix .$related_posts[$i]->post_name .'">' . $related_posts[$i]->post_title. '</option>';

    }
    $mark_up .= '</select>';
    return $mark_up;
}

function eemjii_related_post_filter ($wp_query_args, $mix_args) {
    $the_query = new WP_Query($wp_query_args);
    $mark_up = '';
    if ($the_query -> have_posts()):
        $mark_up .= '<select class="'.$mix_args['select_class'].'">';
        $mark_up .= '<option class="filter" data-filter="all" value="all">All</option>';
            for ( $j = 0; $the_query->have_posts(); $j++ ) : $the_query->the_post();
                $mark_up .= '<option
                            class="filter"
                            data-filter=".'.get_the_title() .'"'.
                            'value="'.$mix_args['class_prefix'].the_slug(false) .
                            '">' .
                            get_the_title().
                            '</option>';
            endfor;
        $mark_up .= '</select>';
    endif;
    // resetting the WP_Query to avoid conflicting errors
    wp_reset_query();
    return $mark_up;
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
        .mix-it-up .mix, .mix-it-up-sub .mix-service{
            display: none;
        }
    </style>
<div class="container">
<?php
eemjii_related_taxonomy_filter('category');

echo eemjii_related_post_filter(
    array(
        'post_type'      	=> 'eemjii_services',
        'posts_per_page'	=> 0,
        'post__in'		    => get_field('related_services', false, false),
        'post_status'		=> 'any',
        'order'             => 'ASC',
        'orderby'        	=> 'title'
    ),
    array(
        'select_class'      => 'mix-filter-services',
        'class_prefix'      => 'service-'
    )
);

echo eemjii_related_post_filter(
    array(
        'post_type'      	=> 'eemjii_solutions',
        'posts_per_page'	=> 0,
        'post__in'		    => get_field('related_solutions', false, false),
        'post_status'		=> 'any',
        'order'             => 'ASC',
        'orderby'        	=> 'title'
    ),
    array(
        'select_class'      => 'mix-filter-solutions',
        'class_prefix'      => 'solution-'
    )
);
?>
</div>
<div class="container">
<div class="row">
    <div class="mix-it-up">
    <?php
    eemjii_loop_resources('category');
    ?>
    </div>
    </div>
</div>
<?php get_footer(); ?>