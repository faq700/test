
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
                ?>

                <h2><?php echo $new['news_name'];  ?></h2>
                <h5>Новость добавлена: <?php echo $settime['hours']; ?>:<?php echo $settime['minutes']; ?>   <?php echo $settime['mday'],'.',$settime['mon'],'.',$settime['year']; ?> </h5>
                <p><a href="?view=morenews&news_name=<?php echo $new['news_name']; ?>&news_date=<?php echo $new['news_date']; ?>">Подробнее</a></p>

            <?php };  ?>