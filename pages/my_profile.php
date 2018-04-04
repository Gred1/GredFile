<?php ob_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<?php require("../includes/bd.php"); ?>
	<meta charset="utf-8">
	<title>Music Instruments</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<link rel="stylesheet" type="text/css" href="/style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

</head>
<body>
	<?php 
		if(!isset($_SESSION['logged_user'])) {
			header("Location: In.php");
		}
	?>
	<!-- ШАПКА -->
	<div class="header">
		<?php include("../includes/header.php"); ?>
	</div>
	<!-- ШАПКА -->

	<!-- КОНТЕНТ -->
	<div class="container" style="font-family: 'Open Sans', sans-serif;">
		<div class="my_prof">
			<div class="row">
				<div class="col-lg-6" style="padding-left: 30px;">
					<p style="font-size: 50px;">Здраствуйте, <?php echo $_SESSION['logged_user']->login . '!'; ?><p>
					<p>Ваш email: <?php echo $_SESSION['logged_user']->email ?></p>
					<a href="logout.php" style="text-decoration: none; ">Выйти</a>
				</div>
			</div>
		</div>		
	</div>
	<!-- КОНТЕНТ -->

	<!-- ФУТЕР -->
		<div class="footer">
			<?php include("../includes/footer.php") ?>
		</div>
	<!-- ФУТЕР -->

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="/script.js"></script>
</body>
</html>
<?php ob_end_flush(); ?>