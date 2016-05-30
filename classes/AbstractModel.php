<?php

class AbstractModel {
    static protected $table;

    public static function getall (){
        //$class = get_called_class();
        $sql='SELECT * FROM '  . static ::$table;
        $db = new DB();
        return $db -> query($sql);
    }
    public static function getone ($id){
        //$class = get_called_class();
        $sql='SELECT * FROM '  . static ::$table . ' WHERE id=:id';
        $db = new DB();
        return $db -> query($sql, [':id' => $id]);
    }

    public static function add ($params){
        $fn=[];
        $sql='SHOW FIELDS FROM ' . static ::$table;
        $db = new DB();
        $res = $db->query($sql);
        foreach($res as $v){
            foreach($v as $kk=>$vv){
                if ($kk=='0' and $vv!='id'){
                    $fn[$vv]=$vv;
                }
            }
        }
        ksort($fn);
        ksort($params);
        print_r($fn);
        print_r($params);

        foreach($params as $key => $value) {
        }
        //$class = get_called_class();
       //
       //
        //
        // var_dump($res);
        //$sql='INSERT INTO '  . static ::$table . ' VALUES id=:id';
        //$db = new DB();
        //return $db -> query($sql, [':id' => $id]);
    }
}