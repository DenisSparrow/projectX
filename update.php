<?php
    require_once('config/connect.php');
    $id = $_GET['id'];

    $good_query = mysqli_query($connect, "SELECT * FROM `goods` WHERE id = '$id'");
    $good = mysqli_fetch_assoc($good_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="crud/update.php" method="post">
        <h2>Хотите внести изменения?</h2>
        <input type="hidden" name="id" value="<?= $id?>">
        <p>Введите новое название товара</p>
        <input type="text" name="title" value="<?= $good['Title']?>">
        <p>Введите новое описание товара</p>
        <textarea name="description"><?= $good['Description']?></textarea>
        <p>Введите новую желаемую цену</p>
        <input type="number" name="price" value="<?= $good['Price']?>"><br>
        <button type="submit">Отправить</button>
    </form>
</body>
</html>