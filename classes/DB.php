<?php
class DB {

    private $dbh;
    public function __construct()
    {
        try{
        $this->dbh = new PDO('mysql:host=localhost;dbname=test.loc', 'root', '');
         //$this->dbh=setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION ); не работает по непонятным причинам
        }catch(PDOException $e){
            $err=new E404Ecxeption();
            $err->falsbd('Извините Бд не работае');
        }
    }

    public function query ($sql, $param=[]) {
try{
        $sth = $this->dbh->prepare($sql);
        $sth->execute($param);
       return $sth->fetchAll();
}catch(PDOException $e){
    $err=new E404Ecxeption();
    $err->falsbd('Извините Бд не работае');
}
}
    }

    /*
     public function query ($sql) {
        $mysqli= new mysqli('localhost','root','','test.loc');
        if ($mysqli->connect_error) {
            die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
        }
        $res=$mysqli->query($sql);
        return $res;
    }
    */
}