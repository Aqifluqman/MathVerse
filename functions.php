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
    // Get the quizzes from