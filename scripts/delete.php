<?php
require('../req.php');
$updateId = $_GET['id'];

mysqli_query($sqlBase, "DELETE FROM `clientbd` WHERE `clientbd`.`id` = '$updateId'");
header('Location: /');

?>