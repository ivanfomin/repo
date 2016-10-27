<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Все новости</title>
</head>
<body>

<?php foreach ($news as $article) : ?>
    <article>
        <h1><a href="../control/showArt.php?id=<?php echo $article->id; ?>">
                <?php echo $article->title; ?></a></h1>
        <div><?php echo $article->content; ?></div>
        <p><?php echo $article->author ?? 'без автора'; ?></p>
    </article>
<?php endforeach; ?>

</body>
</html>