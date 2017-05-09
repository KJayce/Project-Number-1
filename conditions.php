<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=100%, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    date_default_timezone_set('Europe/Brussels');
    $script_tz = date_default_timezone_get();

    echo $script_tz;

    ?>
</body>
</html>