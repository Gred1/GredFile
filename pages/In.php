<?php ob_start(); ?>
<?php require("../includes/bd.php"); ?>	
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Драсьте</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<link rel="stylesheet" type="text/css" href="/style.css">
	<link rel="stylesheet" type="text/css" href="../font-awesome.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<body class="body1">
<?php 
	$user1 = $_POST;
	if(isset($user1['submit'])){
		$errors = array();
		$user = R::findOne('users', 'login = ?', array($user1['user_in']));
		if ($user){
			if (password_verify($user1['password'], $user->password)){
				$_SESSION['logged_user'] = $user;
				header("Location: /");
			}
			else{
				$errors[] = 'Неверный пароль!';
			}
		}
		else{
			$errors[] = 'Неверно введен логин!';
		}
	}
?>
	<div class="in_reg">
		<a href="/"><img src="../img/x.jpg" width="26px"></a>
		<h1>Вход в систему</h1>
			<?php
				if(isset($errors)){ ?>
				<p style="margin-bottom: -30px ;font-family: 'Open Sans', sans-serif; color: red; font-size: 18px"><?php echo(array_shift($errors)) ?></p><?php 
				}
			?>
		<div class="container-fluid">
			<form action="In.php" method="POST">
				<div class="input_div">
					<input class="input_div1" type="text" name="user_in" placeholder="Введите логин">
				</div>

				<div class="input_div">
					<input class="input_div1" type="password" name="password" placeholder="Введите пароль">
				</div>

				<div class="but">
					<input type="submit" name="submit" value="Войти">
				</div>
			</form>

			<div class="social">
				<i class="fa fa-google-plus" aria-hidden="true"></i>
				<i class="fa fa-facebook" aria-hidden="true"></i>
				<i class="fa fa-vk" aria-hidden="true"></i>
				<i class="fa fa-telegram" aria-hidden="true"></i>
			</div>
			<a href="#">Восстановить пароль</a>
			<p>Нет аккаунта? <a href="reg">Создать!</a></p>

		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../script.js"></script>
</body>
</html>
<?php ob_end_flush(); ?>