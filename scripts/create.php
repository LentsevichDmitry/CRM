<?php
require("../req.php");
$name = $_POST['name'];
$lastName = $_POST['lastname'];
$date = $_POST['date'];
$city = $_POST['city'];
$adress = $_POST['adress'];
$postalCode = $_POST['postal_code'];
$number = $_POST['number'];
$debds = $_POST['debds'];

mysqli_query($sqlBase, "INSERT INTO `clientbd` 
    (`id`, `name`, `lastname`, `date`, `city`, `adress`, `postal_code`, `number`, `debds`) 
    VALUES (NULL, '$name', '$lastName', '$date', '$city', '$adress',
            '$postalCode', '$number', '$debds')");

header('Location: /');
?>