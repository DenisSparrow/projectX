<?php
    require_once('../config/connect.php');
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    mysqli_query($connect, "INSERT INTO `goods` (`id`, `Title`, `Description`, `Price`) VALUES (NULL, '$title', '$description', '$price')");

    header('Location: ../index.php');
?> 