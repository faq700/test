<?php
class DB {
     public function query ($sql) {
        $mysqli= new mysqli('localhost','root','','test.loc');
        if ($mysqli->connect_error) {
            die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
        }
        $res=$mysqli->query($sql);
        return $res;
    }
}