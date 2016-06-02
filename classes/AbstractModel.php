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
        $data=[];
        foreach ($coloms as $k=>$v){
            $data[':' . $v] = $this->data[$v];
        }
        $sql='INSERT INTO '  . static ::$table . ' (' . implode(', ', $coloms) .') VALUES (' . implode(', ', array_keys($data)). ')';
        print_r($sql);
        $db = new DB();
        $res=$db->query($sql, $data);
    }






}