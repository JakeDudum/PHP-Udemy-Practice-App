<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
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

echo floor(3.14159265359) . "<br>";

echo strlen("How long is this string?") . "<br>";

echo min([23423,12412,457456,1234312,3456,234523,456,234,346789]);
	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>