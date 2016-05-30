<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Новостная лента</title>
</head>
<body>

<p><?php echo $_SESSION['err']; ?></p>
<?php unset($_SESSION['err']); ?>

<?php
//print_r($this->data);
foreach($nw as $new) {
    $time=$new['news_date'];
    $settime=new Settime($time);
    $settime=$settime->settime($time);
    ?>

    <h2><?php echo $new['news_name'];  ?></h2>
    <h5>Новость добавлена: <?php echo $settime['hours']; ?>:<?php echo $settime['minutes']; ?>   <?php echo $settime['mday'],'.',$settime['mon'],'.',$settime['year']; ?> </h5>
    <p><a href="?action=morenews&controller=Morenewscontroller&id=<?php echo $new['id']; ?>">Подробнее</a></p>

<?php };  ?>



</body>
</html>

<?php
