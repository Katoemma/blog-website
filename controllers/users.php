<?php
//error_reporting(E_ERROR | E_WARNING);

$basePath = dirname(__DIR__); // The base path of the project
include $basePath . '/database/db.php';
include $basePath . '/helpers/validateUser.php';

$table ='users'; // initialise the table 

$users = selectAll($table);

$id ='';
$username = '';
$email = '';
$password = '';
$passwordcof = '';
$admin ='';



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


 if (isset($_POST['submit-btn']) || isset($_POST['add-btn'])) {
    $errors = validateUser($_POST);

    if (count($errors) === 0) {
        unset($_POST['submit-btn'], $_POST['confirm_password'], $_POST['add-btn'] );
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

        if (isset($_POST['admin'])) {
          $_POST['admin'] = 1;
          $user_id = create($table, $_POST);
          $_SESSION['message'] = 'Admin User successfuly created';
          header('location: users_dashboard.php');
          exit();
        } else {
          $_POST['admin'] = 0;
          $user_id = create($table, $_POST);
          $user = selectOne($table, ['id' => $user_id]);
          userlog($user);
        }
    } else {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordcof = $_POST['confirm_password'];
        $admin = isset($_POST['admin']) ? 1 : 0 ;
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
    
if (isset($_GET['delete_id'])) {
  $del_id = $_GET['delete_id'];

  $count = delete($table, $del_id);
  $_SESSION['message'] = 'user deleted successfully';
  header('location:users_dashboard.php'); 
  exit();
}

if (isset($_GET['id'])) {
  $user = selectOne($table, ['id' => $_GET['id']]);

  $id = $user['id'];
  $username = $user['username'];
  $email = $user['email'];
  $admin = isset($user['admin']) ? 1 : 0 ;
  
  
}

if (isset($_POST['update-user'])) {
    $errors = validateUser($_POST);

    if (count($errors) === 0) {
        $id = $_POST['id'];
        unset($_POST['update-user'], $_POST['confirm_password'], $_POST['id']);
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $_POST['admin'] = isset($_POST['admin']) ? 1 : 0 ;
        $count = update($table, $id, $_POST);
        $_SESSION['message'] = 'Admin User successfuly updated';
        header('location: users_dashboard.php');
        exit();
    } else {
        $username = $_POST['username'];
        $admin = isset($_POST['admin']) ? 1 : 0 ;
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordcof = $_POST['confirm_password'];
        
    }
}