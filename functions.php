<?php
// Define the theme's functions
function mathverse_get_lessons() {
    // Get the lessons from the database
    $lessons = get_posts(array(
        'post_type' => 'lesson',
        'posts_per_page' => -1,
    ));
    return $lessons;
}

function mathverse_get_quizzes() {
    // Get the quizzes from the database
    $quizzes = get_posts(array(
        'post_type' => 'quiz',
        'posts_per_page' => -1,
    ));
    return $quizzes;
}

function mathverse_get_discussion_forum() {
    // Get the discussion forum from the database
    $discussion_forum = get_posts(array(
        'post_type' => 'discussion_forum',
        'posts_per_page' => -1,
    ));
    return $discussion_forum;
}