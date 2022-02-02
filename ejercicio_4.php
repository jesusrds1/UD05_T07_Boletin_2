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
     $n1 = $_GET['campo1'];
     $n2 = $_GET['campo2'];
       $multiplicacion=$n1*$n2;
       $resta=$n1-$n2;
       $dividir=$n1/$n2;
       $suma=$n1+$n2;
        echo "la multiplicación : $multiplicacion"."</br>";
        echo "la división : $dividir"."</br>";
        echo "la resta: $resta"."</br>";
        echo "la suma: $suma"."</br>";
        
    ?>
</body>
</html>