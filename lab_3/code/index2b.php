<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['surname'] = $_POST['surname'];
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['age'] = $_POST['age'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Сохранение данных в сессию</title>
</head>
<body>
<form method="post" action="">
    Фамилия: <input type="text" name="surname"><br>
    Имя: <input type="text" name="name"><br>
    Возраст: <input type="text" name="age"><br>
    <button type="submit">Сохранить</button>
</form>
</body>
</html>