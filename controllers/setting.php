<?php

$basePath = dirname(__DIR__); // The base path of the project
include $basePath . '/database/db.php';
include $basePath . '/helpers/validatePost.php';

$table = 'settings';//initialise the table
$settings = selectAll($table);
