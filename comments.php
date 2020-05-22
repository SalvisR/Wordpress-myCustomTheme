<?php

$fields = array(

    'author' => '<input placeholder="Name" class="comment-form__input comment-form__fields" id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) .
        '" size="30"' . $aria_req . ' />',

    'email' => '<input placeholder="E-mail" class="comment-form__input comment-form__fields" id="email" name="email" type="text" value="' . esc_attr($commenter['comment_author_email']) .
        '" size="30"' . $aria_req . ' />'
);

$args = array(
    'title_reply' => 'Add a comment',
    'comment_notes_before' => '',
    'comment_notes_after' => '',
    'title_reply_to' => 'Atbildet',
    'fields' => $fields,
    'comment_field' => '<textarea placeholder="Your comment..." class="comment-form__textarea comment-form__fields" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>'
);
?>
<?php
$comments = get_comments(array('post_id' => get_the_ID()));

?>

<ul class="comment-list">
    <?php
    wp_list_comments(
        array(
            'per_page' => '',
            'avatar_size' => 0,
            'style' => 'ul',
            'max_depth' => 1,
            'short_ping' => true,
            'callback' => 'better_commets'
        ),
        $comments
    );
    ?>
</ul>

<?php comment_form($args); ?>
