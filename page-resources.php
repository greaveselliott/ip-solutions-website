<?php
/*
    Template Name: Resources
*/
?>
<?php get_header(); ?>
    <div class="height-auto-important-tablet-portrait">
        <!--    <div class="header-offset"></div>-->
        <?php get_template_part('template','carousel'); ?>
    </div>
    </div>

    <div class="background-grey opacity-25 padding-top padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <form class="form-horizontal">
                        <div class="form-group margin-bottom-0">
                            <label for="inputEmail3" class="col-sm-3 control-label text-orange">What category?</label>
                            <div class="col-sm-9">
                                <?php eemjii_related_taxonomy_filter('resource_type'); ?>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-6">
                    <form class="form-horizontal">
                        <div class="form-group margin-bottom-0">
                            <label for="inputEmail3" class="col-sm-3 control-label text-orange">What Service?</label>
                            <div class="col-sm-9">
                                <?php
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
                                        'class_prefix'      => 'services_'
                                    )
                                );
                                ?>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="mix-it-up">
                <?php
                $taxonomies_obj = eemjii_get_taxonomies('resource_type');

                for ($i = 0; $i < count($taxonomies_obj); $i++ ) :
                    $this_taxonomy_obj = $taxonomies_obj[$i];
                    $the_query = new WP_Query(
                        array(
                            'post_type'     => 'eemjii_resources',
                            //'category_name' => $this_taxonomy_obj->slug
                            'tax_query' => array(
                                array(
                                    'taxonomy'  =>  'resource_type',
                                    'field'     =>  'slug',
                                    'terms'     =>  $this_taxonomy_obj->slug
                                )
                            )
                        )
                    ); ?>

                    <div class="width-100 mix <?php echo $this_taxonomy_obj->slug?>" data-myorder="<?php echo $i; ?>">
                        <?php echo '<h2 class="display-block text-black padding-left-1_5">' .$this_taxonomy_obj->name . '</h2>';?>
                        <div class="mix-it-up-sub block-grid-lg-4 block-grid-md-3 block-grid-sm-3 block-grid-xs-1">
                            <?php
                            foreach ($the_query->posts as $post) :
                                $related_services = get_field('related_services', $post->ID);
                                $related_classes = !empty($related_services) ?
                                    eemjii_set_related_post_classes($related_services, 'service-') :
                                        null;
                                echo '<div class="mix-service block-grid-item '.$related_classes . '">';
                                        include( locate_template('template-resources.php') );
                                echo '</div>';
                            endforeach;
                            ?>
                        </div>
                    </div>
                    <?php
                    // Does this query have any posts?
                    // resetting the WP_Query to avoid conflicting errors
                    wp_reset_query();
                endfor;
                ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>