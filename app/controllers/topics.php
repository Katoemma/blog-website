<?php

$basePath = dirname(__DIR__); // The base path of the project
include $basePath . '/database/db.php';
include $basePath . '/helpers/validateTopic.php';

$table = 'topics';//initialise the table

$errors = array();//initialise errors

$id = '';
$name = '';
$description = '';

$topics = selectAll($table);


if (isset($_POST['add-btn'])) {
    $errors = validateTopic($_POST);
   

    if (count($errors)=== 0){
        unset($_POST['add-btn']);

        $topic_id = create($table, $_POST);
        $_SESSION['message'] ='Topic added successfully';

        header('location:topics_dashboard.php');
        exit();
    }
     else{
        $name = $_POST['name'];
        $description = $_POST['description'];
    }
    
    
}

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $topic = selectOne($table, ['id' => $id]);
    $id = $topic['id'];
    $name = $topic['name'];
    $description = $topic['description'];
}

if (isset($_GET['del-id'])) {
    $ide = $_GET['del-id'];

    $count = delete($table, $ide);
    $_SESSION['message'] = 'Topic Deleted successfully';

    header('location: topics_dashboard.php');
    exit();
}

if(isset($_POST['edit-btn'])){
    $errors = validateTopic($_POST);
   

    if (count($errors)=== 0){
    $id = $_POST['id'];
    unset($_POST['edit-btn'], $_POST['id']);
    
    $topic_id = update($table, $id, $_POST);
    $_SESSION['message'] = 'Topic Updated successfully';

    header('location: topics_dashboard.php');
    exit();
    } else{
        $id = $_POST['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
    }
}