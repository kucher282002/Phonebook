<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Телефонный справочник</title>
</head>
<body>
    <main>
        <h1>Телефонный справочник</h1>
        <table>
            <tr>
                <th>Имя</th>
                <th>Номер</th>
                <th></th>
            </tr>
            <?php
                $json = file_get_contents('phonebook.json');
                $dataArray = json_decode($json, true);
                if ($dataArray === null) {
                    error_log("Ошибка при преобразовании JSON");
                } else {
                    foreach ($dataArray as $key => $item) {
                        ?>
                            <tr>
                                <td><?=$item['name']?></td>
                                <td><?=$item['phone']?></td>
                                <td>
                                    <form method="post" action="delete.php">
                                        <button type="submit" name="del" value="<?=$key?>">Удалить</button>
                                    </form>
                                </td>
                            </tr>
                        <?php
                    }
                }
            ?>
        </table>
        <a href="add.php">Добавть номер</a>
    </main>
</body>
</html>
