<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['userData'] = array(
        'name' => $_POST['name'],
        'age' => $_POST['age'],
        'salary' => $_POST['salary'],
        'city' => $_POST['city']
    );
}
?>

<form method="post" action="">
    <label for="name">Имя:</label>
    <input type="text" id="name" name="name"><br><br>

    <label for="age">Возраст:</label>
    <input type="text" id="age" name="age"><br><br>

    <label for="salary">Зарплата:</label>
    <input type="text" id="salary" name="salary"><br><br>

    <label for="city">Город:</label>
    <input type="text" id="city" name="city"><br><br>

    <button type="submit">Сохранить</button>
</form>