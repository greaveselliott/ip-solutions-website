<?php
/*
    Template Name: Resources
*/
?>
    <!-- Resources -->

<?php get_header(); ?>

<?php



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