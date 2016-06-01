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
        $param= new NewsModel();
        $param->news_name=$_POST['news_name'];
        $param->news=$_POST['news'];
        $param->news_date=time();
        $param->add();
        unset($_POST['news_name']);
        $this->allnews();
        unset($_POST['news_name']);
    }
}
