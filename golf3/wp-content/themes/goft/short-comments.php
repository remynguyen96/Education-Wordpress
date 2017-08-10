<?php
$fields =  array(

  'author' =>
    '<p class="comment-form-author"><label for="author">' . __( 'Full Name', 'domainreference' ) . '</label> ' .
    ( $req ? '<span class="required">*</span>' : '' ) .
    '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
    '" size="30"' . $aria_req . ' /></p>',

  'email' =>
    '<p class="comment-form-email"><label for="email">' . __( 'Full Email', 'domainreference' ) . '</label> ' .
    ( $req ? '<span class="required">*</span>' : '' ) .
    '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
    '" size="30"' . $aria_req . ' /></p>',

  'phone' =>
    '<p class="comment-form-phone"><label for="phone">' . __( 'Full Phone', 'domainreference' ) . '</label> ' .
    ( $req ? '<span class="required">*</span>' : '' ) .
    '<input id="phone" name="phone" type="number" value="' . esc_attr(  $commenter['comment_author_phone'] ) .
    '" size="30"' . $aria_req . ' /></p>'

);

$comments_args = array(
        // change the title of send button
        'label_submit'=>'Comment',
        // change the title of the reply section
        'title_reply'=>'Write a Reply or Comment',
        // remove "Text or HTML to be displayed after the set of comment fields"
        'comment_notes_after' => '',
        // redefine your own textarea (the comment body)
        'comment_field' => '<p class="comment-form-comment">
            <label for="comment">' . _x( 'Comment', 'noun' ) . '</label><br />
            <textarea id="comment" class="form-control" name="comment" aria-required="true"></textarea>
        </p>',
        'fields' => apply_filters( 'comment_form_default_fields', $fields ),
);

comment_form($comments_args);
