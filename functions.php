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

function mathverse_get_vr_experiences() {
    // Get the VR experiences from the database
    $vr_experiences = get_posts(array(
        'post_type' => 'vr_experience',
        'posts_per_page' => -1,
    ));
    return $vr_experiences;
}

function mathverse_get_interactive_features() {
    // Get the interactive features from the database
    $interactive_features = get_posts(array(
        'post_type' => 'interactive_feature',
        'posts_per_page' => -1,
    ));
    return $interactive_features;
}