<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    
    function add_numbers($number1, $number2){
        
        $sum = $number1 + $number2;
        
        return $sum;
        
        
    }
    
    $result = add_numbers(34, 56);
    
    echo $result;
    
    echo "<br>";
    
    $result = add_numbers(100, $result);
    
    echo $result;
    
    echo "<br>";
    
    $result = add_numbers(1000, $result);
    
    echo $result;
    
    ?>
</body>
</html>