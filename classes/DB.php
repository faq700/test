<?php
class DB {
    private $dbh;
    public function __construct()
    {
        $this->dbh = new PDO('mysql:host=localhost;dbname=test.loc', 'root', '');
    }

    public function query ($sql, $param=[]) {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($param);
       return $sth->fetchAll();
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