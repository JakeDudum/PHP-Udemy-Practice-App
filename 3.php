<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

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

 if(1 > 100) {
	echo "What is PHP?";
 } elseif(1 > 10) {
	echo "Why is PHP?";
 } else {
	echo "I love PHP";
 }

 echo "<br>";

 for($count = 1; $count <= 10; $count++) {
	 echo $count . "<br>";
 }

 $number = 7;

 switch($number) {
	 case 1:
		echo "The number is 1.";
	 	break;
	 case 2:
		echo "The number is 2.";
	 	break;
	 case 3:
		echo "The number is 3.";
	 	break;
	 case 4:
		echo "The number is 4.";
	 	break;
	 case 5:
		echo "The number is 5.";
	 	break;
	 case 6:
		echo "The number is 6.";
	 	break;
	 case 7:
		echo "The number is 7.";
	 	break;
	 case 8:
		echo "The number is 8.";
	 	break;
	 case 9:
		echo "The number is 9.";
		break;
	default:
		echo "There is no number.";
		break;
 }

?>

</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>