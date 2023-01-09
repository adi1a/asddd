<?php
        $day = rand(1,31);
        echo ($day);
        if ($day > 0 && $day <= 11){
            $day = 'Первая декада';
        }elseif($day >= 12 && $day <= 21){
            $day = 'Вторая декада';
        }else{
            $day = 'Третья декада';
        }
    echo($day);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>