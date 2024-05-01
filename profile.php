<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Кирилло А.И.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container navigbar">
        <div class="row">
            <div class="col-8 navigtext">
                <p><font color="blue">Информация про меня!</font></p>
            </div>
            <div class="col-4 naviglogo"></div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3>Я, Кирилло Александр, знаю всё про веб, шифрование и следование инструкциям. Готов создать безопасный и стильный сайт или приложение!</h3>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="my_photo"></div>
                </div>
                <div class="row">
                    <p class="under_photo">Кирилло А.И.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="button_js col-12">
                <button id="myButton">Click on me</button>
                <p id="demo"></p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="Hello">Привет, <?php echo $_COOKIE['User'];?></h1>
            </div>
            <div class="col-12">
                <form method="POST" action="profile.php">
                    <input type="text" class="form" name="title" placeholder="Заголовок поста"></input>
                    <textarea name="text" class="textar" cols="30" rows="10" placeholder="Введите текст ..."></textarea>
                    <button type="submit" class="btn_red" name="btn-post">Сохранить пост</button>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/button.js"></script>
</body>
</html>
<?php
require_once('db.php');
$link = mysqli_connect('127.0.0.1', 'root', '12345678', 'first');
if (isset($_POST['btn-post'])) {
    $title = $_POST['title'];
    $main_text = $_POST['text'];
    if (!$title || !$main_text) die ("Заполните все поля");
    $sql = "INSERT INTO posts (title, main_text) VALUES ('$title', '$main_text')";
    if (!mysqli_query($link, $sql)) die ("Не удалось добавить пост");
}
?>