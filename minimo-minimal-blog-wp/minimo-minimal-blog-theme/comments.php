<?php
/**
 * The template for displaying Comments.
 * The area of the page that contains comments and the comment form.
 */

 if (post_password_required()) return; 
 
 ?>

<?php if ( have_comments() ) : ?>
<ol class="comment-list">
            <?php
                wp_list_comments( array(
                    'style'       => 'ol',
                    'short_ping'  => true,
                    'avatar_size' => 74,
                ) );
            ?>
        </ol><!-- .comment-list -->
<?php endif; ?>
<?php comment_form( array(
    'class_submit' => 'btn btn-dark btn-block',
    'comment_field' => '<textarea class="form-control"></textarea>'
    )); 
?>