<?php

class E404Ecxeption extends Exception {

    function falsinsert ($par) {

     $view=new View();
        $view->assign($par);
        $view->display('404.php');
    }

    function falsbd ($par) {

        $view=new View();
        $view->assign($par);
        $view->display('403.php');
    }

   // echo 'такая новость уже существует';

   /* const NEWSISSET = 10;

    public static function senderror {

    }*/
}