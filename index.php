<?php
require("req.php");
$clients = mysqli_query($sqlBase, "SELECT * FROM `clientbd`");
$clients = mysqli_fetch_all($clients);
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
<div>
    <form action="scripts/create.php" method="POST">
        <input type="text" name="name" placeholder="Имя"><br>
        <input type="text" name="lastname" placeholder="Фамилия"><br>
        <input type="text" name="date" placeholder="Дата рождения"><br>
        <input type="text" name="city" placeholder="Город"><br>
        <input type="text" name="adress" placeholder="Адрес"><br>
        <input type="text" name="postal_code" placeholder="Почтовый индекс"><br>
        <input type="text" name="number" placeholder="Номер телефона"><br>
        <input type="text" name="debds" placeholder="Задолженность"><br>
        <button type="submit">Добавить</button>
    </form>
</div>
<div>
    <table class="table">
        <thead class="table-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Имя</th>
            <th scope="col">Фамилия</th>
            <th scope="col">Дата рождения</th>
            <th scope="col">Город</th>
            <th scope="col">Адрес</th>
            <th scope="col">Почтовый индекс</th>
            <th scope="col">Номер телефона</th>
            <th scope="col">Задолженность</th>
            <th scope="col">&#9998</th>
            <th scope="col">&#10006</th>
            <th scope="col">Подробнее</th>
        </tr>
        </thead>
        <tbody>

        <?php
        foreach ($clients as $item):
            ?>
            <tr>
                <td><?= $item[0] ?></td>
                <td><?= $item[1] ?></td>
                <td><?= $item[2] ?></td>
                <td><?= $item[3] ?></td>
                <td><?= $item[4] ?></td>
                <td><?= $item[5] ?></td>
                <td><?= $item[6] ?></td>
                <td><?= $item[7] ?></td>
                <td><?= $item[8] ?></td>
                <td><a href="update.php?id=<?= $item[0] ?>">Редактировать</a></td>
                <td><a href="scripts/delete.php?id=<?= $item[0] ?>">Удалить</a></td>
                <td><a href="comment.php?id=<?= $item[0] ?>">Подробнее</a></td>
            </tr>
        <?php
        endforeach;
        ?>

        </tbody>
    </table>
</div>


</body>
</html>