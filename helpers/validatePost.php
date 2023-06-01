<?php

function validatePost($post)
{
    $errors = array();
    
    if(empty($post['title'])){
        array_push($errors, 'Title is required');
    }
    if(empty($post['body'])){
        array_push($errors, 'You must input the body content');
    }
    if(empty($post['author'])){
        array_push($errors, 'Authors name is required');
    }
    if(empty($post['topic_id'])){
        array_push($errors, 'Please select a topic');
    }
    

    $existingPost = selectOne('post', ['title' => $post['title']]);
    if($existingPost){
        array_push($errors, 'Post with the title already exists!');
    }
    return $errors;
}
