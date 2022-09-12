<?php
require("../req.php");
$idUp = $_POST['id'];
$comment = $_POST['comment'];
mysqli_query($sqlBase, "INSERT INTO `comments` (`id`, `updateId`, `comment`) VALUES (NULL, '$idUp', '$comment')");

header('Location: ../comment.php?id=' . $idUp);