<?php
    require_once('../config/connect.php');

    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $good_query = mysqli_query($connect, "UPDATE `goods` SET `Title` = '$title', `Description` = '$description', `Price` = '$price' WHERE `goods`.`id` = '$id'");

    header('Location: ../index.php');
?>