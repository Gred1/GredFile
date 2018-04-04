<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Music Instruments</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<link rel="stylesheet" type="text/css" href="../style_reg.css">
	<link rel="stylesheet" type="text/css" href="../font-awesome.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">	
	<?php include("../includes/bd.php"); ?>	
</head>
<body class="body2">

		<?php 
			$data = $_POST;
			if (isset($data['do_sign'])){
				if(trim($data['user'] == "")){
					$errors[] = 'Введите логин!';
				}
				if(trim($data['email'] == "")){
					$errors[] = 'Введите email!';
				}
				if(trim($data['password1'] == "")){
					$errors[] = 'Введите пароль!';
				}
				if($data['password1'] != $data['password2']){
					$errors[] = 'Повторный пароль неверен!';
				}
				if(R::count('users', 'login = ?', array($data['user'])) > 0){
					$errors[] = 'Пользователь с таким логином уже зарегистрирован';
				}
				if(R::count('users', 'email = ?', array($data['email'])) > 0){
					$errors[] = 'Пользователь с таким email уже зарегистрирован';
				}
				if (empty($errors)){ ?>

					<div class="in_reg">
						<h1>Регистрация</h1>
						<div class="container-fluid">
							<?php $_SESSION['logged_user'] = $user; ?>
							<p class="reg_ready" style=" text-align: center; font-family: 'Open Sans'; text-decoration: none;
						color: black;">Вы успешно зарегестрировались <br> Перейти на <a href="/">главную</a></p>
						</div>
					</div>

					<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    				<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    				<script src="../script.js"></script>

<?php				$user = R::dispense('users');
					$user->login = $data['user'];
					$user->email = $data['email'];
					$user->password = password_hash($data['password1'], PASSWORD_DEFAULT);
					R::store($user);

					exit();
				}
			}

		?>

	<div class="in_reg">
		<a href="/"><img src="../img/x.jpg" width="26px"></a>
		<h1>Регистрация</h1>

		 <?php
			if(isset($errors)){ ?>
			<p style="margin-bottom: -30px ;font-family: 'Open Sans', sans-serif; color: red;"><?php echo(array_shift($errors)) ?></p><?php 
			}
		?>

		<div class="container-fluid">
			<form action="reg.php" method="POST">
				<div class="input_div">
					<input class="input_div1" type="text" name="user" placeholder="Создайте логин" value="<?php echo$data['user']; ?>">
				</div>

				<div class="input_div">
					<input class="input_div1" type="email" name="email" placeholder="Введите ваш email" value="<?php echo $data['email']; ?>">
				</div>

				<div class="input_div">
					<input class="input_div1" type="password" name="password1" placeholder="Придумайте пароль" >
				</div>

				<div class="input_div">
					<input class="input_div1" type="password" name="password2" placeholder="Введите пароль еще раз">
				</div>

				<div class="but">
					<input type="submit" name="do_sign" value="Создать">
				</div>
			</form>

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