<?php

if(isset($_POST['id']) && isset($_POST['title'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    $article = \App\Model\Article::findById($id);
    $article->title = $title;
    $article->content = $content;

    $article->save();

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        <?php echo $this->article->title; ?>
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

<form action="/" method="post">
    <input type="text" name="id" value="<?php echo $this->article->id; ?>" style="width: 0%">
    <input type="text" name="title" value="<?php echo $this->article->title; ?>" style = "width: 40%;">
    <p><input name="content" value="<?php echo $this->article->content; ?>" style="width: 80%; height: 100px"></p>
    <input type="submit" value="Изменить" style="width: 10%;">
</form>

</body>
</html>