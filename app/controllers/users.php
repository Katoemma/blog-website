<?php
session_start();
$basePath = dirname(__DIR__); // The base path of the project
include $basePath . '/database/db.php';
include $basePath . '/helpers/validateUser.php';

$username = '';
$email = '';
$password = '';
$passwordcof = '';
$table ='users'; // initialise the table 

function userlog($user){
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
}

 if (isset($_POST['submit-btn'])) {
    $errors = validateUser($_POST);

    if (count($errors) === 0) {
        unset($_POST['submit-btn'], $_POST['confirm_password']);
        $_POST['admin'] = 0;
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $user_id = create($table, $_POST);
        $user = selectOne($table, ['id' => $user_id]);

       userlog($user);

    } else {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordcof = $_POST['confirm_password'];
    }
}

//login 
if(isset($_POST['login-btn'])){
  
  $errors = validateLogin($_POST);

    if(count($errors)=== 0){
      $user = selectOne($table, ['email' => $_POST['email']]);

      if ($user && password_verify($_POST['password'], $user['password'])){

        userlog($user);// call the user log function

      } else {
        array_push($errors, 'Wrong credentials');
      }
    }

    $email = $_POST['email'];
    $password =$_POST['password'];
}
    
  
