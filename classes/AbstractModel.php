<?php

class AbstractModel {
    static protected $table;

protected $data=[];

    public function __set($name, $value)
    {
       $this->data[$name]=$value;
    }

    public function __get($name)
    {
        $this->data[$name];
    }


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

    public function add (){
        $coloms=[];
        $coloms=array_keys($this->data);
        $res=$this->isexist();
        print_r($res);
        $sql='INSERT INTO '  . static ::$table . ' (' . implode(', ', $coloms) .') VALUES (' . (implode(', ', $this->data)) . ')';
        $db = new DB();
        $res=$db->query($sql);

    }

    public function isexist() {
        $coloms=[];
        $dat=[];
        $rez=[];
        $dat=$this->data;
        unset($dat['news_date']);
        $coloms=array_keys($dat);
        foreach($coloms as $k=>$v){
            $rez[]=$v.'='.$dat[$v];
        }
        $sql='SELECT * FROM '  . static ::$table . ' WHERE (' . implode(', ', $rez). ' )';
        echo $sql;
        $db = new DB();
        return $db -> query($sql);
    }
}