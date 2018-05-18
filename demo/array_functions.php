<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <?php
    
    $list = [343,34,323,23,54,232,453];
    $names = ["Mackenzie", "Thomas"];
    
    echo max($names); //biggest value in array if numbers
    
    echo "<br>";
    
    echo min($list); //smallest value in array if numbers
    
    echo "<br>";
    
    sort($list);
    
    echo "<br>";
    
    print_r($list);
    
    ?>
    
    
    
</body>
</html>