<?php
require('req.php');
$updateId = $_GET['id'];
$client = mysqli_query($sqlBase, "SELECT * FROM `clientbd` WHERE `id`='$updateId'");
$client = mysqli_fetch_assoc($client);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редактирование пользователя</title>
</head>
<body>
<form action="scripts/updatedo.php" method="POST">
    <input type="hidden" name="id" value="<?= $updateId ?>">
    <input type="text" name="name" placeholder="Имя" value="<?= $client['name'] ?>"><br>
    <input type="text" name="lastname" placeholder="Фамилия" value="<?= $client['lastname'] ?>"><br>
    <input type="text" name="date" placeholder="Дата рождения" value="<?= $client['date'] ?>"> <br>
    <input type="text" name="city" placeholder="Город" value="<?= $client['city'] ?>"><br>
    <input type="text" name="adress" placeholder="Адрес" value="<?= $client['adress'] ?>"><br>
    <input type="text" name="postal_code" placeholder="Почтовый индекс" value="<?= $client['postal_code'] ?>"><br>
    <input type="text" name="number" placeholder="Номер телефона" value="<?= $client['number'] ?>"><br>
    <input type="text" name="debds" placeholder="Задолженность" value="<?= $client['debds'] ?>"><br>
    <button type="submit">Обновить</button>
</form>
</body>
</html>