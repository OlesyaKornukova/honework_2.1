<?php
    $data = file_get_contents(__DIR__ . '/info');
    $dataJson = json_decode($data);
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>PHP-2.1Адресная книга</title>
    <style>
        table{
            border-collapse: collapse;
        }
        th, td{
            border: 1px solid darkslategrey;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>Адрессная книга</h1>
    <table>
        <tr>
            <th>
                Имя
            </th>
            <th>
                Фамилия
            </th>
            <th>
                Email
            </th>
            <th>
                Телефон
            </th>
            <th>
                Город
            </th>
            <th>
                Улица
            </th>
            <th>
                Квартира
            </th>
        </tr>
        <?php foreach($dataJson as $user):?>
            <tr>
                <td>
                    <?php echo $user->firstName?>
                </td>
                <td>
                    <?php echo $user->lasttName?>
                </td>
                <td>
                    <?php echo $user->email?>
                </td>
                <td>
                    <?php echo implode(', ', $user->phoneNumber)?>
                </td>
                <td>
                    <?php echo $user->address->city?>
                </td>
                <td>
                    <?php echo $user->address->streetAddress?>
                </td>
                <td>
                    <?php echo $user->address->apartment?>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>
