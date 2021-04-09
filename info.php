<?php
require_once 'includes/db.php';
require_once 'includes/head.php';
$id = $_GET["id"];

$table = mysqli_query($db, "SELECT * FROM `tables` WHERE `id` = $id");

//Извлекает результирующий ряд в виде ассоциативного массива
$table = mysqli_fetch_assoc($table);


?>
<div class="container">
    <div class="row ">
        <div class="p-3  bg-light mx-auto">
            <h1>name: <?=$table["name"]?> </h1>
            <p> id# <?=$table["id"]?></p>
            <p>email: <b><?=$table["email"]?></b> </p>
            <p>comment: <?=$table["comment"]?></p>

            <br>
            <br>
            <a href='/' type="button" class="btn btn-danger">Home</a> <br>
        </div>
    </div>
    </body>
</html>