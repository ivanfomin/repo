<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        <?php echo $article->title; ?>
    </title>
    <style>
        input {
            width: 50%;
        }
        textarea {
            width: 90%;
            height: 200px;
        }

        </style>
</head>
<body>

<form action="../control/formEdit.php" method="post">
    <input type="text" name="id" value="<?php echo $article->id; ?>" style="width: 0%">
    <input type="text" name="title" value="<?php echo $article->title; ?>" style = "width: 40%;">
    <p><input name="content" value="<?php echo $article->content; ?>" style="width: 80%; height: 100px"></p>
    <input type="submit" value="Изменить" style="width: 10%;">
</form>

</body>
</html>