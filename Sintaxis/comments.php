<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comments</title>
</head>
<body>
    <?php
    //This is a single-line comment
    #This is also a single-line comment
    /*
    This is a multile-lines comment block
    that spans over multiple
    lines
    */ 
    //YOu can also use comments to leave out parts of a code line
    $x = 5 /* + 15*/ + 5;
    echo $x; 
    ?>
</body>
</html>