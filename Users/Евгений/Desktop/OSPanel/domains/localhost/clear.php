<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userAdd";

// Создание подключения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Выбираем поле для удаления 
$sql = "DELETE FROM usersadd";

if ($conn->query($sql) === TRUE) {
    echo "Все пользователи успешно удалены!";
} else {
    echo "Ошибка удаления " . $conn->error;
}

$conn->close();
?>
<html>
<head> 
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<p>Для возврата на начальную страницу нажмите <a href="index.html">здесь</a><p>
</body>
</html>