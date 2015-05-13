<?php
// Lingonberry comment function
if ( ! function_exists( 'lingonberry_comment' ) ) :
    function lingonberry_comment( $comment, $args, $depth ) {
        $GLOBALS['comment'] = $comment;
        switch ( $comment->comment_type ) :
            case 'pingback' :
            case 'trackback' :
                ?>

                <li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">

                    <?php __( 'Pingback:', 'lingonberry' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( __( '(Edit)', 'lingonberry' ), '<span class="edit-link">', '</span>' ); ?>

                </li>
                <?php
                break;
            default :
                global $post;
                ?>
                <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">

                    <div id="comment-<?php comment_ID(); ?>" class="comment">

                        <div class="comment-meta comment-author vcard">

                            <?php echo get_avatar( $comment, 120 ); ?>

                            <div class="comment-meta-content">

                                <?php printf( '<cite class="fn">%1$s %2$s</cite>',
                                    get_comment_author_link(),
                                    ( $comment->user_id === $post->post_author ) ? '<span class="post-author"> ' . __( '(Post author)', 'lingonberry' ) . '</span>' : ''
                                ); ?>

                                <p><a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ) ?>"><?php echo get_comment_date() . ' &mdash; ' . get_comment_time() ?></a></p>

                            </div> <!-- /comment-meta-content -->

                            <div class="comment-actions">

                                <?php edit_comment_link( __( 'Edit', 'lingonberry' ), '', '' ); ?>

                                <?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply', 'lingonberry' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>

                            </div> <!-- /comment-actions -->

                            <div class="clear"></div>

                        </div> <!-- /comment-meta -->

                        <div class="comment-content post-content">

                            <?php if ( '0' == $comment->comment_approved ) : ?>

                                <p class="comment-awaiting-moderation"><?php __( 'Your comment is awaiting moderation.', 'lingonberry' ); ?></p>

                            <?php endif; ?>

                            <?php comment_text(); ?>

                            <div class="comment-actions">

                                <?php edit_comment_link( __( 'Edit', 'lingonberry' ), '', '' ); ?>

                                <?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply', 'lingonberry' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>

                                <div class="clear"></div>

                            </div> <!-- /comment-actions -->

                        </div><!-- /comment-content -->

                    </div><!-- /comment-## -->
                <?php
                break;
        endswitch;
    }
endif;
