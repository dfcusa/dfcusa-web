<?php

$dir = rtrim(dirname(__FILE__), '/');

$path = $_SERVER['REQUEST_URI'];
$path = parse_url($path, PHP_URL_PATH);

// var_dump($path); exit;

if(file_exists("$dir/$path")){
    return false;
}

if( preg_match('/^\/dfcusa-web\/app\/webroot/', $path) ){
    $path = str_replace('/dfcusa-web/app/webroot', '', $path);
    // var_dump($path); exit;
    header("Location: $path");
    exit;
}

if( preg_match('/^\/dfcusa-web/', $path) ){
    $path = str_replace('/dfcusa-web', '', $path);
    header("Location: $path");
    exit;
}

include "$dir/index.php";
