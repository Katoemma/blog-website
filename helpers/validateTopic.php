<?php

function validateTopic($topic)
{
    $errors = array();
    
    if(empty($topic['name'])){
        array_push($errors, 'topic name is required');
    }
    

    $existingTopic = selectOne('topics', ['name' => $topic['name']]);
    if($existingTopic){
        if (isset($topic['edit-btn']) && $existingTopic['id'] != $topic['id']) {
            array_push($errors, 'Post with the title already exists!');
        }
        if (isset($topic['add-btn'])) {
            array_push($errors, 'Post with the title already exists!');
        }
    }
    return $errors;
}
