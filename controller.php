<?php
session_start();
require_once('model.php');
require_once('function.php');

if ($_POST['news_name']) {
    if (empty($_POST['news'])) {
        $_SESSION['err']='не введен текст новости';
    }else{
    $addnews=new Query;
}

$news=news();

if ($_GET['news_date'] and $_GET['news_name']){
    $news_date=$_GET['news_date'];
    $news_name=$_GET['news_name'];
    $newstext=morenews($news_date,$news_name);
}

$view=empty($_GET['view']) ? 'inc' : $_GET['view'];