<?php

function __autoload ($loadedfile) {
    if (file_exists(__DIR__  . '/controllers/' . $loadedfile . '.php')) {
        require_once __DIR__  . '/controllers/' . $loadedfile . '.php';
    }elseif (file_exists(__DIR__  . '/models/' . $loadedfile . '.php')) {
        require_once __DIR__  . '/models/' . $loadedfile . '.php';
    }elseif (file_exists(__DIR__  . '/classes/' . $loadedfile . '.php')) {
        require_once __DIR__  . '/classes/' . $loadedfile . '.php';
    }
}

if ($_POST['news_name']) {
    if (empty($_POST['news'])) {
        $_SESSION['err']='не введен текст новости';
    }else{
        $_GET['action']='addnews';
    }
}


$controller = isset ($_GET['controller']) ? $_GET['controller'] : 'Maincontroller';
$action = isset ($_GET['action']) ? $_GET['action'] : 'allnews';

$ctrl = new $controller;

$ctrl->$action();

