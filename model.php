<?php

function addnews() {
    if (empty($_POST['news'])) {
        $_SESSION['err']='не введен текст новости';
    }else{
        $link=mysqli_connect('localhost','root','','test.loc')
        or
        die(mysqli_errno($link).mysqli_error($link));
        $news_name=$_POST['news_name'];
        $news=$_POST['news'];
        $time=time();
        $query="INSERT into news (news_name, news_date, news) VALUES ('$news_name', '$time', '$news')";
        mysqli_query($link,$query)
        or
        die(mysqli_errno($link).mysqli_error($link));
    }
    header('location: http://test.loc/index.php');
}

function news() {
    $link=mysqli_connect('localhost','root','','test.loc')
    or
    die(mysqli_errno($link).mysqli_error($link));
    $query="SELECT news_name, news_date, news FROM news ORDER BY news_date DESC";
    $res=mysqli_query($link,$query)
    or
    die(mysqli_errno($link).mysqli_error($link));
   $news=[];
    while($row=mysqli_fetch_assoc($res)){
        $news[]=$row;
    }
    return $news;
}

function morenews($news_date,$news_name){
    $link=mysqli_connect('localhost','root','','test.loc')
    or
    die(mysqli_errno($link).mysqli_error($link));
    $query="SELECT news FROM news WHERE '$news_date'=news_date AND '$news_name'=news_name";
    $res=mysqli_query($link,$query)
    or
    die(mysqli_errno($link).mysqli_error($link));
    $row=mysqli_fetch_row($res);
    return $row;
}