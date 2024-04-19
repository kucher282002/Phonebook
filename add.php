<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавление пользователя</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form class="inputForm" method="post" action="added.php">
        <label for="name">Имя:</label>
        <input id="name" name="name" type="text" placeholder="Имя" required>
        <label for="phone">Номер:</label>
        <input id="phone" name="phone" type="number" placeholder="Номер" required>
        <button type="submit">Добавить</button>
    </form>
</body>
</html>