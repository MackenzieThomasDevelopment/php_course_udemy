<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    
    function init(){
        
        calculate();
        say_something();
        
    }
    
    function calculate(){
        
        echo 575 + 538 . "<br>";
    }
    
    function say_something(){
        echo "Hello Student, do you like the class?";
    }
    
    init();
    
    
    ?>
</body>
</html>