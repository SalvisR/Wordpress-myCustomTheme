<?php
function better_commets($comment, $args, $depth)
{
?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
        <div class="comment">
            <div class="comment-block">
                <?php if ($comment->comment_approved == '0') : ?>
                    <em><?php esc_html_e('Your comment is awaiting moderation.', '5balloons_theme') ?></em>
                    <br />
                <?php endif; ?>
                <span class="comment-by">
                    <strong><?php echo get_comment_author() ?></strong>
                    <span class="float-right">
                        <span> <a href="#"><i class="fa fa-reply"></i> <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?></a></span>
                    </span>
                </span>
                <p> <?php comment_text() ?></p>
                <small class="date"><?php printf(/* translators: 1: date and time(s). */esc_html__('%1$s at %2$s', '5balloons_theme'), get_comment_date('F dS Y'),  get_comment_time('H:i')) ?></small>
            </div>
        </div>

    <?php
}
    ?>
