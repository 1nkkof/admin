<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>

    <?php if(!empty($_SESSION["login"])):?>
    
    <?php
    echo "добрый день сын, ".$_SESSION['login'];
    ?>
    <a href="/logout.php">Выйти</a>
    <?php else:
    echo 'бро иди нахуй';
    echo '<a href= "/"> на главную </a>';
    ?>
    </div>
</body>
</html>