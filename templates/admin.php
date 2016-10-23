<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Новости</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <style>
        div {
            border: 2px solid grey;
            font-family: Verdana, sans-serif;
            background-color: #d8e9f1;
        }
    </style>

</head>
<body>


<?php foreach ($articles as $article) { ?>
    <div>
    <p>
    <a href="../control/showArt.php?id=<?php echo $article->id; ?>">
        <?php echo $article->title; ?></a>
        </p>
    <a href="../control/editArt.php?id=<?php echo $article->id; ?> ">Редактировать</a>
    <a href="../control/deleteArt.php?id=<?php echo $article->id; ?> ">Удалить</a>
    </div>
    <hr>
<?php } ?>

<a href="/templates/add.php">Добавить новость</a>



</body>
</html>