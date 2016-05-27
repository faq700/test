<?php

class Morenewscontroller {
    public function morenews(){
        $news_date=$_GET['news_date'];
        $news_name=$_GET['news_name'];
        $newstext=MorenewsModel::morenews();
        include __DIR__ . '/../view/morenews.php';
    }
}