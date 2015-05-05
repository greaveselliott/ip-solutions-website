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

function eemjii_reverse_post_query ($post_type, $relationship_field, $current_post_ID) {
    // Query posts
    $posts = get_posts(array(
        'post_type' => $post_type,
        'meta_query' => array(
            array(
                'key' => $relationship_field, // name of custom field
                'value' => '"' . $current_post_ID . '"', // matches exaclty "123", not just 123. This prevents a match for "1234"
                'compare' => 'LIKE'
            )
        )
    ));

    // Resetting Query
    wp_reset_query();

    // Return all posts
    return $posts;
}

function eemjii_simple_post_query ($post_type, $post_per_page = 0) {
    // Query posts
    $posts = get_posts(array(
                        'post_type'         => $post_type,
                        'posts_per_page'    => $post_per_page,
                        'nopaging'          => true // overrides the default paging settings which would only return 5 posts
    ));

    // Resetting Query
    wp_reset_query();

    // Return all posts
    return $posts;
}

function eemjii_post_command ($posts, $template_file) {
    if( $posts ):
            foreach( $posts as $post ):
                include( locate_template($template_file) );
            endforeach;
    endif;
}

// returns the url of a specific post ID
// @property $post_ID expects INT
function eemjii_get_featured_image_url ($post_ID, $size = 'large', $attr = array()) {
    return $featured_image = has_post_thumbnail($post_ID) ? // CONDITION: This post thumbnail has a featured image?
        get_the_post_thumbnail($post_ID, $size,$attr) :          // TRUE: save the post thumnail
            '<img src="http://placehold.it/300x180" class="width-100 height-100">';                  // FALSE: use the default image
}

function eemjii_get_acf_image_url ($field_name, $sub_field = false) {
    if (!$sub_field):
        $image = get_field($field_name);
        elseif($sub_field):
            $image = get_sub_field($field_name);
            endif;
    return !empty($image) ?                 // CONDITION: Is this custom field image empty?
        $image :                            // TRUE: Return the image URL
            'http://placehold.it/100x100';  // FALSE: Return the default image
}