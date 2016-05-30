<?php
class Maincontroller {

    public function allnews(){
        $view= new View();
        $view->display('inc.php');
        $news=NewsModel::getall();
        $view->nw=$news;
        //$view->assign($news);
        $view->display('index.php');
    }

    public function addnews() {
        $params=[];
        $params['news_name']=$_POST['news_name'];
        $params['news']=$_POST['news'];
        $params['news_date']=time();
        NewsModel::add($params);
        $this->allnews();
        unset($_POST['news_name']);
    }
}
