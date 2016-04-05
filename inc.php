
<form action="" method="post">
        <label><input type="text" name="news_name">Введите название новости</label><br>
        <label>Введите новость<br><textarea name="news" rows="10" cols="45"></textarea></label><br>
        <input type="submit" name="submit" value="Отправить новость">
    </form>
    <br>
<?php
            foreach($news as $new) {
                $time=$new['news_date'];
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

                <h2><?php echo $new['news_name'];  ?></h2>
                <h5>Новость добавлена: <?php echo $hours; ?>:<?php echo $minutes; ?>   <?php echo $mday,'.',$mon,'.',$year; ?> </h5>
                <p><a href="?view=morenews&news_name=<?php echo $new['news_name']; ?>&news_date=<?php echo $new['news_date']; ?>">Подробнее</a></p>

            <?php };  ?>