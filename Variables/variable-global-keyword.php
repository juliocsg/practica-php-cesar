<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $x = 5;
        $y = 10;
        function myTest() {
            global $x, $y;
            $y = $x + $y;
        }
        myTest(); //run function
        echo $y;
    ?>
</body>
</html>