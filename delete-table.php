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
            <h1>Удалить - <?=$table["name"]?> ?</h1>
            <form action="includes/action/delit.php" method="POST" >
            <input type="hidden" name="id"  value="<?=$table["id"]?>">
            <button type="submit" class="btn btn-danger">Удалить </button>
            </form>
        </div>
    </div>
</div>

