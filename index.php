<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    function checkStatic():int{
        $x=0;
        return ++$x;
    }
    print checkStatic();
    print checkStatic();
    
    ?>
</body>
</html>