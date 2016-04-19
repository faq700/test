<?php

function settime($time) {
    $settime=[];
    $settime=getdate($time);
    if ($settime['hours']<10){
        $settime['hours']=('0'.$settime['hours']);
    }
    if ($settime['minutes']<10){
        $settime['minutes']=('0'.$settime['minutes']);
    }
    if ($settime['mday']<10){
        $settime['mday']=('0'.$settime['mday']);
    }
    if ($settime['mon']<10){
        $settime['mon']=('0'.$settime['mon']);
    }
    return $settime;
}