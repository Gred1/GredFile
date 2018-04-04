<?php ob_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<?php require('../includes/bd.php') ?>
	<meta charset="utf-8">
	<title>Music Instruments</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<link rel="stylesheet" type="text/css" href="../style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">	
</head>
<body>
	<!-- ШАПКА -->
	<div class="header">
		<?php include("../includes/header.php") ?>
	</div>
	<!-- ШАПКА -->


	<!-- КОНТЕНТ -->
	<div class="drop">
		<div class="container">
			<div class="info_sup">
				<h1><b>Поддержка</b></h1>
				<p>Здесь вы можете задать интересующий вас вопрос</p>
			</div>
			<form>
				<label>Name</label>
	    		<input class="in1" name="name">
	            
	    		<label>Email</label>
	    		<input class="in1" name="email" type="email">
	            
	    		<label>Message</label>
	    		<textarea name="message"></textarea>
	            
	    		<input class="in" id="submit" name="submit" type="submit" value="Отправить">
	        
			</form>
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
    <script src="../script.js"></script>
</body>
</html>
<?php ob_end_flush(); ?>