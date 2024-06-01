<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "taplink";

// Создаем соединение
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверяем соединение
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Получаем данные из базы данных
$sql = "SELECT * FROM `comments` WHERE 1";
$result = $conn->query($sql);



$comments = array();


if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $comments[] = $row;
  }
}

echo json_encode($comments);

$conn->close();


