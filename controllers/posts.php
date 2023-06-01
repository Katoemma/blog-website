<?php

$basePath = dirname(__DIR__); // The base path of the project
include $basePath . '/database/db.php';
include $basePath . '/helpers/validatePost.php';

$table = 'post';//initialise the table
$topics = selectAll('topics');
$posts = selectAll($table);
$errors =array();


$title = '';
$body = '';
$topic_id = '';
$author = '';

if (isset($_POST['create-btn'])) {
    $errors = validatePost($_POST);

    if (count($errors)=== 0) {
        unset($_POST['create-btn'], $_POST['topic_id']);
        $_POST['user_id'] = 1;
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
        $_POST['body'] = htmlentities($_POST['body']);

        $post = create($table, $_POST);
        $_SESSION['message'] = 'Post created successfully';

        header('location:post_dashboard.php'); 
        exit();
    } else{

        $title = $_POST['title'];
        $body = $_POST['body'];
        $topic_id = $_POST['topic_id'];
        $author = $_POST['author'];
    }
    
}




