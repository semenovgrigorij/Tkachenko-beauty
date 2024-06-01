<?php
// Добавление данных в базу данных
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "taplink";
// Создаем соединение
$conn = new mysqli($servername, $username, $password, $dbname);
// Проверяем соединение
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else {
  error_reporting(E_ALL);
  echo "Успешное соединение с базой данных<br>";
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Получаем данные из формы и очищаем их от потенциально вредоносных символов
  $username = $conn->real_escape_string($_POST['username']);
  $date = date('Y-m-d');
  $comment = $conn->real_escape_string($_POST['comment']);

  // Подготавливаем запрос с плейсхолдерами
  $sql = "INSERT INTO comments (username, date, comment) VALUES (?, ?, ?)";
  $stmt = $conn->prepare($sql);

  // Привязываем значения к плейсхолдерам и выполняем запрос
  $stmt->bind_param("sss", $username, $date, $comment);
  if ($stmt->execute()) {

    // При успешном добавлении данных перенаправляем пользователя на другую страницу
    header("Location: http://localhost/wordpress-6.1.1-uk/wordpress/Reviews/");
    // Очистка данных POST
    $_POST = array();
    exit();
  } else {
    echo "<div class='error-message'><h2>Ошибка:</h2> " . $stmt->error . "</div>";
  }



  $stmt->close();
  $conn->close();
}
