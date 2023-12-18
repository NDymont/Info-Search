<?php
include("utils.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $birthday = $_POST['birthday'];

    addRow($name, $mail, $city, $address, $birthday);
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Добавить запись</title>
</head>

<body>
    <h2>Записная книжка</h2>
    <form method="POST" action="ex2.php">
        <label for="name">Фамилия и имя (*):</label>
        <input type="text" name="name" required><br>
        <br>
        <label for="city">Город:</label>
        <input type="text" name="city"><br>
        <br>
        <label for="address">Адрес:</label>
        <input type="text" name="address"><br>
        <br>
        <label for="birthday">Дата рождения:</label>
<!--        <input type="text" name="birthday"><br>-->
        <input type="date" name="birthday"><br>
        <br>
        <label for="mail">Электронная почта (*):</label>
        <input type="email" name="mail" required><br>
        <br>
        <button type="submit">Отправить</button>
    </form>
</body>

</html>