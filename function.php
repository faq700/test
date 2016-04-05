<?php

function settime($time) {
    $settime=[];
    $settime=getdate($time);
    return $settime;
}