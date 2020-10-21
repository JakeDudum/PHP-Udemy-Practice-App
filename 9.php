<?php include "functions.php" ?>
<?php include "includes/header.php" ?>



<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>


	</aside>
	<!--SIDEBAR-->


	<article class="main-content col-xs-8">



		<?php

		/*  Create a link saying Click Here, and set 
		the link href to pass some parameters and use the GET super global to see it

		Step 2 - Set a cookie that expires in one week

		Step 3 - Start a session and set it to value, any value you want.
		*/

		if (isset($_GET['message'])) {
			echo $_GET['message'] . "<br>";
		}

		$time = time() + (60 * 60 * 24 * 7 * 4);

		setcookie("cookieMonster", "I will eat all of the cookies", $time);

		if (isset($_COOKIE['cookieMonster'])) {
			echo $_COOKIE['cookieMonster'] . "<br>";
		}

		session_start();

		$_SESSION["demo"] = "Hello World!";

		if (isset($_SESSION["demo"])) {
			echo $_SESSION["demo"] . "<br>";
		}

		?>

		<a href="9.php?message=link%20was%20clicked">CLICK ME</a>

	</article>
	<!--MAIN CONTENT-->
	<?php include "includes/footer.php" ?>