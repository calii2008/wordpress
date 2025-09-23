<?php

if(post_pasword_required()) {
    return;
}
?>
<div class="comments-area" id="comments">
    <?php
    if(have_comments()) {
        ?>
        <h2 class="comments-title">
            <?php
            $comments_number = get_comments_number();
            if($comments_number === 1) {
                printf(esc_html__('One thought on &ldquo;%s&rdquo;', 'wordpress'), get_the_title());
            } else {
                printf(esc_html(_nx('%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $comments_number, 'comments title', 'wordpress')), number_format_i18($comments_number), get_the_title());
            }
            ?>
        </h2>
        <?php
        the_comments_navigation();
        ?>
        <ol class="comment-list">
            <?php
            wp_list_comments(array(
                'style' => 'ol',
                'short_ping' => true,
                'avatar_size' => 42,
            ));
            ?>
        </ol>
        <?php
        the_comments_navigation();
        if(!comments_open()) {
            ?>
            <p class="no-comments"><?php esc_html_e('Comments are closed.', 'wordpress'); ?></p>
            <?php
        }
    }
comment_form(
    array(
        'title_reply_before' => '<h2 class="comment-reply-title">',
        'title_reply_after' => '</h2>',
    )
    );
    ?>

</div>
?>