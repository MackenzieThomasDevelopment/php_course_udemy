<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

	if(1 > 3){
        echo "I Hate PHP";
    }else if(1 === 4){
        echo "I Really Hate PHP";
    }else{
        echo "I love PHP<br>";
    }
    
    
    for($n = 0; $n < 10; $n++){
        echo $n . "<br>";
    }
    
    
    $number = 5;
    
    switch($number){
        case 5:
            echo "This is the correct answer";
            break;
        case 4:
            echo "This is the incorrect answer";
            break;
        case 3:
            echo "This is the incorrect answer";
            break;
        case 2:
            echo "This is the incorrect answer";
            break;
        case 1:
            echo "This is the incorrect answer";
            break;
        default:
            echo "The number was not found";
            break;
    }
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>