<?php
// Создание подключения
$conn = new mysqli("db", "root", "helloworld", "web");

// Проверка подключения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Получение данных из формы
$email = $_POST['email'];
$category = $_POST['category'];
$title = $_POST['title'];
$description = $_POST['description'];

// Подготовленный запрос для добавления объявления в базу данных
$stmt = $conn->prepare("INSERT INTO ad (email, category, title, description) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $email, $category, $title, $description);
$stmt->execute();

echo "Объявление успешно добавлено в базу данных";

// Закрытие подключения
$stmt->close();
$conn->close();
?>