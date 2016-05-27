<?php

class MainModel {

    public static function getall () {
        $sql="SELECT news_name, news_date, news FROM news ORDER BY news_date DESC";
        $DB = new DB();
        $news=[];
        $res=$DB->query($sql);
        while ($row=$res->fetch_assoc()){
            $news[]=$row;
        }
        return $news;
    }

    public static function addnews(){
        $news_name=$_POST['news_name'];
        $news=$_POST['news'];
        $time=time();
        $sql="SELECT news_id FROM news WHERE news_name='$news_name'";
        $DB=new DB();
        $res=$DB->query($sql);
        if (mysqli_num_rows($res)>0) {
            $_SESSION['err']='такая новость уже существует';
        }else{
            $sql="INSERT into news (news_name, news_date, news) VALUES ('$news_name', '$time', '$news')";
            $DB=new DB();
            $res=$DB->query($sql);
            $res=TRUE ? $_SESSION['err']='новость добавлена' : $_SESSION['err']='новость не добавлена';
        }
    }
}