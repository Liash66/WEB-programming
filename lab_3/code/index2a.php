<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Подсчет слов и символов</title>
</head>
<body>
<form method="post">
    <textarea name="text" rows="5" cols="40"></textarea>
    <br>
    <input type="submit" value="Подсчитать">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST["text"];
    $words = str_word_count($text);
    $chars = strlen($text);

    echo "<p>Количество слов: $words</p>";
    echo "<p>Количество символов: $chars</p>";
}
?>
</body>
</html>