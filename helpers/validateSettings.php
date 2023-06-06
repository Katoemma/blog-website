<?php
function validateSettings($setting)
{
    $errors = array();

    if (empty($setting['title'])) {
        array_push($errors, 'Title is required');
    }
    if (empty($setting['description'])) {
        array_push($errors, 'You must input the description content');
    }
    // Add any additional validation checks for other fields if needed

    return $errors;
}
?>