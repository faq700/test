<?php

class MorenewsModel {
    public static function morenews(){
        $sql="SELECT news FROM news WHERE '$news_date'=news_date AND '$news_name'=news_name";
        $DB=new DB();
        $res=$DB->query($sql);
        $newstext=$res->fetch_row();
        return $newstext;
    }
}