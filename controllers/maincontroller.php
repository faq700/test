<?php
class Maincontroller {

    public function allnews(){
        $view= new View();
        $view->display('inc.php');
        $news=MainModel::getall();
        $view->nw=$news;
        //$view->assign($news);
        $view->display('index.php');
    }

    public function addnews() {
        MainModel::addnews();
        $this->allnews();
        unset($_POST['news_name']);
    }
}
