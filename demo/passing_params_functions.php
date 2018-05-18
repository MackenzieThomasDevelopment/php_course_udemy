<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    
    
    
    function greeting($name){
        
        echo "Greetings, " . $name . ".<br>";
        
    } 
    
    greeting("Mackenzie");
    greeting("Cassidy");
    
    
    
    function add_numbers($number1,$number2){
        
        echo $number1 + $number2;
        
    }
    
    add_numbers(5, 87);
        
    ?>
</body>
</html>