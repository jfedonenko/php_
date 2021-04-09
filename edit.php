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
            <h1>Редактировать данные:</h1>
            <form action="includes/action/save.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id"  value="<?=$table["id"]?>">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Имя</label>
                    <input type="text" class="form-control" id="text" name="name" placeholder="Ваше имя" value="<?=$table["name"]?>">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Адрес электронной почты</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" value="<?=$table["email"]?>">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Текстовое поле</label>
                    <textarea class="form-control" id="Textarea" rows="3" name="comment" ><?=$table["comment"]?></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Редактировать файл</label>

                    <input type="file" class="form-control-file" id="file" name="file" >
                </div>
                <a type="submit" class="btn btn-danger">Редактировать </a>
                <a href="/"  type="button" class="btn btn-success">Домой</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>

