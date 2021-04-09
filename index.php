


<?php
require_once 'includes/db.php';

$tables = mysqli_query($db, "SELECT * FROM `tables`");

require_once 'includes/head.php'
?>




	<div class="container">
		<div class="row ">
            <div class="p-3  bg-light mx-auto">
                <form action="includes/action/user.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Имя</label>
                        <input type="text" class="form-control" id="text" name="name" placeholder="Ваше имя">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Адрес электронной почты</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Текстовое поле</label>
                        <textarea class="form-control" id="Textarea" rows="3" name="comment"></textarea>
                </div>
                <div class="form-group">
                        <label for="exampleFormControlFile1">Отправить файл</label>
                        <input type="file" class="form-control-file" id="file" name="file">
                </div>
                <button type="submit" class="btn btn-primary">Отправить</button>
                </form>
            </div>
            <div class="p-3  bg-light mx-auto">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Comment</th>
                        <th scope="col">File</th>
                    </tr>
                    </thead>
                    <?php  while ($table = mysqli_fetch_assoc($tables)){

                    ?>
                        <tbody>
                        <tr>
                            <th scope="row"><?=$table["id"]?></th>
                            <td><?=$table["name"]?></td>
                            <td><?=$table["email"]?></td>
                            <td><?=$table["comment"]?></td>
                            <td><?=$table["file"]?>  </td>
                            <td>
                                <a href="info.php?id=<?=$table["id"]?>" type="button" class="btn btn-warning">Info</a>
                                <a href="edit.php?id=<?=$table["id"]?>" type="button" class="btn btn-success">Edit</a>
                                <a href="delete-table.php?id=<?=$table["id"]?>" type="button" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        </tbody>
                    <?php
                    }
                    ?>

                </table>
            </div>
        </div>
	</div>
</body>
</html>


