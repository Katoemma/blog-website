<?php
session_start();
$basePath = dirname(__DIR__); // The base path of the project
include $basePath . '/database/db.php';
include $basePath . '/helpers/validateUser.php';

$username = '';
$email = '';
$password = '';
$passwordcof = '';

 if (isset($_POST['submit-btn'])) {
    $errors = validateUser($_POST);

    if (count($errors) === 0) {
        unset($_POST['submit-btn'], $_POST['confirm_password']);
        $_POST['admin'] = 0;
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $user_id = create('users', $_POST);
        $user = selectOne('users', ['id' => $user_id]);

        // Log user in
        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['admin'] = $user['admin'];
        $_SESSION['message'] = 'You are logged in';
        $_SESSION['type'] = 'success';

        if($_SESSION['admin']){
          header('location: admin/dashboard/dashboard.php');
        }else{
          header('Location: index.php');
        }
        exit();

    } else {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordcof = $_POST['confirm_password'];
    }
}
    
  
