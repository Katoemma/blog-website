<?php

$basePath = dirname(__DIR__); // The base path of the project
include $basePath . '/database/db.php';
include $basePath . '/helpers/validatePost.php';

$table = 'post';//initialise the table
$topics = selectAll('topics');
$posts = selectAll($table);
$errors = array();

$id = "";
$title = "";
$body = "";
$topic_id = "";
$author = "";
$published = "";

if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    $count = delete($table, $id);

   $_SESSION['message'] = 'Post deleted successfully';
   header('location:post_dashboard.php'); 
   exit();
}

if (isset($_GET['published']) && isset($_GET['p_id'])) {
    $published = $_GET['published'];
    $p_id = $_GET['p_id'];
    $count = update($table, $p_id , ['published' => $published] );
    $_SESSION['message'] = 'Post publish state changed successfully';
    header('location:post_dashboard.php'); 
    exit();
}

if (isset($_GET['id'])) {
    $post = selectOne($table, ['id'=> $_GET['id']]);
    $id = $post['id'];
    $postTitle = $post['title'];
    $body = $post['body'];   
    $topic_id = $post['topic_id'];
    $author = $post['author'];
    $published = $post['published'];
 }

if (isset($_POST['create-btn'])) {
    $errors = validatePost($_POST);

    if (!empty($_FILES['image']['name'])){
        $image_name = time() . '_'. $_FILES['image']['name'];
        $upload_folder = '../uploads/'. $image_name;

        $result = move_uploaded_file($_FILES['image']['tmp_name'], $upload_folder);

        if ($result) {
            $_POST['image'] = $image_name;

        } else{
            array_push($errors, "Failed to upload image");
        }
    } else{
        array_push($errors, 'Image is required!!');
    }

    if (count($errors)=== 0) {
        unset($_POST['create-btn']);
        $_POST['user_id'] = 1;
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
        $_POST['body'] = htmlentities($_POST['body']);
        $_POST['token'] = time();

        $post = create($table, $_POST);
        $_SESSION['message'] = 'Post created successfully';

        header('location:post_dashboard.php'); 
        exit();
    } else{

        $title = $_POST['title'];
        $body = $_POST['body'];
        $topic_id = $_POST['topic_id'];
        $author = $_POST['author'];
        $published = isset($_POST['published']) ? 1 : 0;
    }
    
}

if (isset($_POST['update-btn'])) {
    //dd($_FILES);
    $errors = validatePost($_POST);

    if (!empty($_FILES['image']['name'])){
        $image_name = time() . '_'. $_FILES['image']['name'];
        $upload_folder = '../uploads/'. $image_name;

        $result = move_uploaded_file($_FILES['image']['tmp_name'], $upload_folder);

        if ($result) {
            $_POST['image'] = $image_name;

        } else{
            array_push($errors, "Failed to upload image");
        }
    } else{
        array_push($errors, 'Image is required!!');
    }


    if (count($errors)=== 0) {
        $id = $_POST['id'];
        unset($_POST['update-btn'], $_POST['id']);
        $_POST['user_id'] = 1;
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
        $_POST['body'] = htmlentities($_POST['body']);

        $post = update($table, $id , $_POST);
        $_SESSION['message'] = 'Post Updated successfully';

        header('location:post_dashboard.php'); 
        exit();
    } else{

        $title = $_POST['title'];
        $body = $_POST['body'];
        $topic_id = $_POST['topic_id'];
        $author = $_POST['author'];
        $published = isset($_POST['published']) ? 1 : 0;
    }

}

//commenting section
 if (isset($_POST['commented'])) {
    $currentURL = $_SERVER['REQUEST_URI'];
    unset($_POST['commented']);
    $comment = create('comments', $_POST);

    header("Location: $currentURL");
    exit();
 }




