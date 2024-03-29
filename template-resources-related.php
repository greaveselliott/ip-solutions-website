<!--Force Square Aspect Ratio -->
<div class="background-white opacity-25 padding-2 border-3-blue margin-bottom">
    <div class="text-align-center force-aspect-ratio-container-tablet-up height-100-tablet-portrait">
        <div class="force-aspect-ratio-tablet-up height-100-tablet-portrait ">
            <!-- Center Content inside box -->
            <div class="table-center-container">
                <div class="table-center-cell">
                    <?php
                    $thumbnail = get_the_post_thumbnail($post->ID, 'resources',array('class'=>'width-100 height-auto'));
                    if ( $thumbnail ) {
                        echo $thumbnail;
                    } else {
                        echo '<img src="'.get_stylesheet_directory_uri().'/images/resource-placeholder.jpg" class="width-100 height-auto">';
                    }
                    ?>

                    <h4 class="text-blue h5"><?php echo $post->post_name; ?></h4>
                    <?php
                    if( get_field('file_attachments',$post->ID) ): ?>
                    <a href="<?php echo the_permalink($post->ID); ?>" target="_blank" title="Click here to download the file attachment" class="btn btn-orange"><i class="fa fa-download"></i>&nbsp;View File</a><?php
                    else :?>
                        <div class="btn btn-grey"><i class="fa fa-exclamation-circle"></i>&nbsp;Download unavailable</div>
                    <?php
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
