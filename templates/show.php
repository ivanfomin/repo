<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>

        <?php echo $article->title; ?>

    </title>
</head>
<body>

<h2><?php echo $article->title; ?></h2>
<p><?php echo $article->content; ?></p>
<p><?php echo $article->author ?? 'без автора'; ?></p>

<a href="/">Назад</a>

</body>
</html>