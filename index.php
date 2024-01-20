<?php
    require_once('config/connect.php');
    
    $good_query = mysqli_query($connect, "SELECT * FROM `goods`");
    $goods = mysqli_fetch_all($good_query);
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
    <table>
        <tr>
            <th>id</th>
            <th>Наименование</th>
            <th>Описание</th>
            <th>Цена</th>
            <th>Подробнее</th>
            <th>&#128736;</th>
            <th>&#128465;</th>
        </tr>
        <?php 
            foreach ($goods as $value) {
        ?>
        <tr>
            <td><?= $value[0]?></td>
            <td><?= $value[1]?></td>
            <td><?= $value[2]?></td>
            <td><?= $value[3]?></td>
            <td><a href="more.php?id=<?= $value[0]?>">Подробнее</a></td>
            <td><a href="update.php?id=<?= $value[0]?>">Изменить</a></td>
            <td><a href="crud/delete.php?id=<?= $value[0]?>">Удалить</a></td>

        </tr>
        <?php
            }
        ?>
    </table>
    <form action="crud/create.php" method="post">
        <h2>Добавить желаемый товар</h2>
        <p>Введите название желаемого товара</p>
        <input type="text" name="title" value="Например: капуста">
        <p>Введите описание товара</p>
        <textarea name="description">Например, каков он на вкус</textarea>
        <p>Введите желаемую цену</p>
        <input type="number" name="price"><br>
        <button type="submit">Отправить</button>
    </form>
</body>
</html>