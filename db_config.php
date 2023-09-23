<?php
$hostname = "localhost"; // Адрес сервера MySQL
$username = "ваш_пользователь"; // Имя пользователя MySQL
$password = "ваш_пароль"; // Пароль MySQL
$database = "ваша_база_данных"; // Название базы данных

// Подключение к MySQL
$conn = new mysqli($hostname, $username, $password, $database);

// Проверка на ошибку подключения
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}
?>