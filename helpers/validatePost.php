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
    // if(empty($topic['topic_id'])){
    //      array_push($errors, 'Please select a topic');
    // }
    

    $existingPost = selectOne('post', ['title' => $post['title']]);
    if($existingPost){

        if (isset($post['update-btn']) && $existingPost['id'] != $post['id']) {
            array_push($errors, 'Post with the title already exists!');
        }

        if (isset($post['create-btn'])) {
            array_push($errors, 'Post with the title already exists!');
        }
        
    }
    return $errors;
}
