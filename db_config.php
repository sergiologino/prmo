<?php
$hostname = "localhost:3306"; // Адрес сервера MySQL
$username = "jbndqhxo_admin"; // Имя пользователя MySQL
$password = "admin19840911"; // Пароль MySQL
$database = "jbndqhxo_med40"; // Название базы данных

// Подключение к MySQL
$conn = new mysqli($hostname, $username, $password, $database);

// Проверка на ошибку подключения
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}
?>