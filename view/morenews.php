<?php
$time=$_GET['news_date'];
$settime=new Settime($time);
$settime=$settime->settime($time);
?>

<p><a href="../index.php">На главную</a></p></a></p>
<h1><?php echo $_GET['news_name']; ?></h1>
<h5>Новость добавлена: <?php echo $settime['hours']; ?>:<?php echo $settime['minutes']; ?>   <?php echo $settime['mday'],'.',$settime['mon'],'.',$settime['year']; ?> </h5>

<p><?php echo $newstext[0]; ?></p>

