<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Error_404</title>
    <style>
        div {
            border: 2px solid grey;
            font-family: Verdana, sans-serif;
            background-color: #d8e9f1;
        }
        h1 {
            color: red;
        }
    </style>
</head>
<body>
<h1>Ошибка 404</h1>
<div>
    <h2><?php echo $this->error; ?></h2>
</div>
</div>
<a href="/">Назад</a>

</body>
</html>