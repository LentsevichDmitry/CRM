<?php
require('req.php');
$updateId = $_GET['id'];
$client = mysqli_query($sqlBase, "SELECT * FROM `clientbd` WHERE `id`='$updateId'");
$client = mysqli_fetch_assoc($client);
$a = '<a href="index.php">&#8656</a>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
</div>
<div>
    <table class="table">
        <thead class="table-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Имя</th>
            <th scope="col">Фамилия</th>
            <th scope="col">Задолженность</th>
            <th scope="col"><?= $a ?></th>
        </tr>
        </thead>
        <tbody>

        <tr>
            <td><?= $updateId ?></td>
            <td><?= $client['name'] ?></td>
            <td><?= $client['lastname'] ?></td>
            <td><?= $client['debds'] ?></td>
        </tr>

        </tbody>
    </table>
</div>
<hr>
<h6>Добавить комментарий</h6>
<form action="scripts/commentdo.php" method="post">
    <input type="hidden" name="id" value="<?= $client['id'] ?>">
    <textarea name="comment" cols="30" rows="5"></textarea><br>
    <button type="submit">Отправить</button>
</form>
<hr>
<h6>Комментарии</h6>
<ul>
    <?php
    $comments = mysqli_query($sqlBase, "SELECT * FROM `comments` WHERE `updateId` = '$updateId'");
    $comments = mysqli_fetch_all($comments);
    foreach ($comments as $comment):
        ?>
        <li><?= $comment[2] ?></li>
        <?php
    endforeach;
    ?>
</ul>
</body>
</html>