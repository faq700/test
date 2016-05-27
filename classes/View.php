<?php

class View {
    public $data=[];
    public function assign($news){
        $this->data=$news;
    }

    public function __set($name, $value)
    {
        // TODO: Implement __set() method.
        $this->data[$name]=$value;
    }

    public function display($template){
       foreach ($this->data as $key=>$val) {
            $$key=$val;
        }
        include __DIR__ . '/../view/' . $template;
    }
}