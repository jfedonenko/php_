<?php

require_once '../db.php';
$new_file = false;
$path = "";
if ($_FILES["file"]["name"]) {
    $new_file = true;

    //создаем переменную для file
    $path = "uploads/" . time() . "_" . $_FILES["img"]["name"];

    //проврка на ошибки

    if (!move_uploaded_file($_FILES["img"]["tmp_name"], "../../" . $path)) {
        die("Error edit file");
    }
}
$id = $_POST["id"];
$name = $_POST["name"];
$email = $_POST["email"];
$comment = $_POST["comment"];


if (!$new_file){
    $path = $_POST["file_url"];
}


$query =  mysqli_query($db,"UPDATE `tables` SET `name` = '$name', `email` = '$email', `comment` = '$comment', `file` = '$path' WHERE `tables`.`id` = $id");

echo "<a href='/'>Home</a> <br>
<br>";

die ($query ? "Save" : "Error query save");
