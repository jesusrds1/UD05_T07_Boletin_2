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
     $radio = $_GET['radio'];
     $altura = $_GET['altura'];
    $volumen=(1/3)*pi()*pow($radio,2)*$altura;
    echo "El volumen del cono es $volumen cm3"
    ?>
</body>
</html>