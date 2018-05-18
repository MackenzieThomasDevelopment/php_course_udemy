<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */
    
    echo pow(5,2);
    
    echo "<br>";
        
    echo strlen("Hello, World!");
    
    echo "<br>";
        
    
    $list = [1,4,5,67,2,5,7];
        
    sort($list);
    
    print_r($list);
    
    
        

	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>