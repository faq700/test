<?php

class Morenewscontroller {
    public function morenews(){
        $newstext=NewsModel::getone($_GET['id']);
        include __DIR__ . '/../view/morenews.php';
    }
}