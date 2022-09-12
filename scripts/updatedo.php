<?php
require('../req.php');
$name = $_POST['name'];
$lastName = $_POST['lastname'];
$date = $_POST['date'];
$city = $_POST['city'];
$adress = $_POST['adress'];
$postalCode = $_POST['postal_code'];
$number = $_POST['number'];
$debds = $_POST['debds'];
$id = $_POST['id'];

mysqli_query($sqlBase, "UPDATE `clientbd` SET `name` = '$name', `lastname` = '$lastName', `date` = '$date',
     `city` = '$city', `adress` = '$adress', `postal_code` = '$postalCode', `number` = '$number',
      `debds` = '$debds' WHERE `clientbd`.`id` = '$id'");

header('Location: /');

?>