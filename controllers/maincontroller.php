<?php

use App\models\News;

class Maincontroller {

    public function allnews(){
        $view= new View();
        $view->display('inc.php');
        $news=News::getall();
        $view->nw=$news;
        //$view->assign($news);
        $view->display('index.php');
    }

    public function addnews() {
        $param= new News();
        $param->news_name=$_POST['news_name'];
        $param->news=$_POST['news'];
        $param->news_date=time();

        try{

        $param->add();
        unset($_POST['news_name']);
        $this->allnews();
    }catch (E404Ecxeption $e){
        $err=new E404Ecxeption();
            echo 'Error :' . $e->getMessage() . '<br />';

        $File=$e->getFile();

        echo 'Line :' . $e->getLine() . '<br />';
            error_log("$File  Такая новость уже существует.<br>", 3, __DIR__ . '/../112.html');

            $err->falsinsert('Такая новость уже существует');
        }
    }
}
