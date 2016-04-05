<?php
$time=$_GET['news_date'];
$settime=settime($time);
//print_r($settime);
$hours=$settime['hours'];
if ($hours<10){
    $hours=('0'.$hours);
}
$minutes=$settime['minutes'];
if ($minutes<10){
    $minutes=('0'.$minutes);
}
$mday=$settime['mday'];
if ($mday<10){
    $mday=('0'.$mday);
}
$mon=$settime['mon'];
if ($mon<10){
    $mon=('0'.$mon);
}
$year=$settime['year'];
?>


<h1><?php echo $_GET['news_name']; ?></h1>
<h5>Новость добавлена: <?php echo $hours; ?>:<?php echo $minutes; ?>   <?php echo $mday,'.',$mon,'.',$year; ?> </h5>

<p></p>

