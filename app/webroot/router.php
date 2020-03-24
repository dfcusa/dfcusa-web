<?php

$dir = rtrim(dirname(__FILE__), '/');

$path = $_SERVER['REQUEST_URI'];
$path = parse_url($path, PHP_URL_PATH);

// var_dump($path); exit;

if(file_exists("$dir/$path")){
    return false;
}


class CTPLoader{

    const PAGES_PREFIX = __DIR__ . '/../View/Pages';
    const ELEMENT_PREFIX = __DIR__ . '/../View/Elements';

    public function element($element){
        return $this->view($element, self::ELEMENT_PREFIX);
    }

    public function view($page, $dir = self::PAGES_PREFIX){
        ob_start();
        require "$dir/$page.ctp";
        return ob_get_clean();
    }

    public static function display($page){
        echo (new static())->view($page);
        exit;
    }

    public function __call($name, $arguments)
    {
        echo PHP_EOL . "ERROR: Method '$name()' not implemented." . PHP_EOL . "ARGS: " . PHP_EOL;
        foreach ($arguments as $key => $argument){
            echo "#$key [" . gettype($argument) . '] ' . ( is_scalar($argument) ? ( is_string($argument) ? "\"$argument\"" : $argument) : '') . PHP_EOL;
        }
        exit;
    }
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

if( preg_match('/^\/dogoodfromhome/', $path) ){
    CTPLoader::display('challenges/dogoodfromhome');
}

include "$dir/index.php";
