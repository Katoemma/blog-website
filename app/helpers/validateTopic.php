<?php

function validateTopic($topic)
{
    $errors = array();
    
    if(empty($topic['name'])){
        array_push($errors, 'name is required');
    }
    

    $existingTopic = selectOne('topics', ['email' => $topic['name']]);
    if(isset($existingTopic)){
        array_push($errors, 'topic already exists!');
    }
    return $errors;
}
