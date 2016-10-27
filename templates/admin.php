<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> Все новости </title>

    <style>
        div {
            border: 2px solid grey;
            font-family: Verdana, sans-serif;
            background-color: #d8e9f1;
        }
    </style>

</head>
<body>


<?php foreach ($news as $article) { ?>
    <div>
        <p>
            <a href="../control/showArt.php?id=<?php echo $article->id; ?>">
                <?php echo $article->title; ?></a>
        </p>
        <sub><?php echo $article->author ?? 'без автора'; ?></sub>
        <hr>
        <a href="../control/editArt.php?id=<?php echo $article->id; ?> ">Редактировать</a>
        <a href="../control/deleteArt.php?id=<?php echo $article->id; ?> ">Удалить</a>
    </div>
    <hr>
<?php } ?>

<a href="/templates/add.php">Добавить новость</a>


</body>
</html>