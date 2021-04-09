<?php
//подключаем БД

require_once '../db.php';

//создаем переменную для file
$path = "uploads/" . time() . "_" . $_FILES["file"]["name"];



if (move_uploaded_file($_FILES["file"]["tmp_name"],"../../" . $path)){

    $name = $_POST["name"];
    $email = $_POST["email"];
    $comment = $_POST["comment"];

    $query = mysqli_query($db, "INSERT INTO `tables` (`id`, `name`, `email`, `comment`, `file`) 
                        VALUES (NULL, '$name', '$email', '$comment', '$path')");


    die($query ? "Добавлен" : "Ошибка при добавлении");



    } else {
        die('Errrrorrr file');
        }

