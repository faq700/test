<?php

require_once ('controller.php');

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Новостная лента</title>
</head>
<body>

<p><?php echo $_SESSION['err']; ?></p>
<?php unset($_SESSION['err']); ?>

<?php  include $view.'.php'; ?>



</body>
</html>

