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

        try{

        $param->add();
        unset($_POST['news_name']);
        $this->allnews();
    }catch (E404Ecxeption $e){
        $err=new E404Ecxeption();
            $err->falsinsert('Такая новость уже существует');
        }
    }
}
