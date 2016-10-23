<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Добавить новость</title>
</head>
<body>
<form method="post" action="../control/formAdd.php">
    <p>Название</p>
    <input type="text" name="title">
    <p>Содержимое</p>
    <input type="text" name="content" style="width: 70%">
    <br>
    <input type="submit" value="Сохранить">
</form>

</body>
</html>