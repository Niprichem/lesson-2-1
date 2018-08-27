<?php
$string = file_get_contents(__DIR__.'\data.json');
$data = json_decode($string, true);
?>
<!doctype html>
<html lang="en">
<head>
    <title>Данные телефонной книжки</title>
</head>
<body>
<table>
    <tr>
        <td>firstName</td>
        <td>lastName</td>
        <td>address</td>
        <td>phoneNumber</td>
    </tr>
<?php foreach ($data as $i => $datum) { ?>
    <tr>
        <td><?php echo $datum["firstName"] ?></td>
        <td><?php echo $datum["lastName"] ?></td>
        <td><?php echo $datum["address"] ?></td>
        <td><?php echo $datum["phoneNumber"] ?></td>
    </tr>
<?php } ?>
</table>
</body>
</html>
