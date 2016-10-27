<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>

        <?php echo $this->article->title; ?>

    </title>
</head>
<body>

<h2><?php echo $this->article->title; ?></h2>
<p><?php echo $this->article->content; ?></p>
<p><?php echo $this->article->author ?? 'без автора'; ?></p>

<a href="/">Назад</a>

</body>
</html>