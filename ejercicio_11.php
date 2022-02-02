<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $Kb = $_GET['Kb'];
    $Mb=$Kb*0.001;
    echo "$Kb Kbs son un total de $Mb Mbs"
    ?>
</body>
</html>