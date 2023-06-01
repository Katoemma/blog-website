<?php

function validateTopic($topic)
{
    $errors = array();
    
    if(empty($topic['name'])){
        array_push($errors, 'topic name is required');
    }
    

    $existingTopic = selectOne('topics', ['name' => $topic['name']]);
    if($existingTopic){
        array_push($errors, 'topic already exists!');
    }
    return $errors;
}
