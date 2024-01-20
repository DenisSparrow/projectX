<?php
    require_once('config/connect.php');
    
    $id = $_GET['id'];
    $good_query = mysqli_query($connect, "SELECT * FROM `goods` WHERE id = '$id'");
    $good = mysqli_fetch_assoc($good_query);

    $comm_query = mysqli_query($connect, "SELECT `comm` FROM `comm` WHERE id_user = '$id'");
    $comm = mysqli_fetch_all($comm_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <a href="index.php"><h2>На главную</h2></a>
    <hr>
    <h1><?= $good['Title']?></h1>
    <p><?= $good['Description']?></p>
    <p><span>Цена: </span><?= $good['Price']?></p>
    <hr>
    <h1>Добавить комментарий</h1>
    <form action="crud/comm.php" method="post">
        <input type="hidden" name="id" value="<?= $id?>">
        <textarea name="comm"cols="30" rows="10">Оставьте свой комментарий</textarea><br>
        <button type="submit">Отправить</button>
    </form>
    <hr>
    <h1>Ваши комментарии</h1>
    <ul>
        <?php
            foreach ($comm as $value) {
        ?>
        <li><?= $value['0']?></li>
        <?php
        }?>
    </ul>
</body>
</html>