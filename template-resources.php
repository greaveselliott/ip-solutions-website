<div class="padding border-2-grey margin-right margin-bottom">
    <div class="text-align-center">
        <div class="display-inline-block">
            <?php
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail('thumbnail');
                } else {}
            ?>
        </div>
    </div>
    <h4><?php the_title(); ?></h4>
    <?php
        the_field('resource_description');
    ?>
    <?php
        if( get_field('file_attachments') ):
            ?><a href="<?php the_field('file_attachments'); ?>" target="_blank" title="Click here to download the file attachment" class="btn btn-orange">Download File</a><?php
        endif;
    ?>
</div>