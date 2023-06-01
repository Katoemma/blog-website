<?php

function validateUser($user)
{
    $errors = array();
    
    if(empty($user['username'])){
        array_push($errors, 'Username is required');
    }
    if(empty($user['email'])){
        array_push($errors, 'email is required');
    }
    if(empty($user['password'])){
        array_push($errors, 'Password is required');
    }
    if($user['password'] !== $user['confirm_password']){
        array_push($errors, 'Password does not match');
    }

    $existingUser = selectOne('users', ['email' => $user['email']]);
    if($existingUser){
        array_push($errors, 'email already exists!');
    }
    return $errors;
}

function validateLogin($user)
{
    $errors = array();
    
    if(empty($user['email'])){
        array_push($errors, 'email is required');
    }
   
    if(empty($user['password'])){
        array_push($errors, 'Password is required');
    }
    
    return $errors;
}