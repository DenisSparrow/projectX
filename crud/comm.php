<?php
    require_once('../config/connect.php');

    $id = $_POST['id'];
    $comm = $_POST['comm'];

    mysqli_query($connect, "INSERT INTO `comm` (`id`, `id_user`, `comm`) VALUES (NULL, '$id', '$comm')");

    header("Location: ../more.php?id=$id");
?>