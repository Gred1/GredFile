<div class="container">
	<div class="row1">
		<div class="row-main">
			<div class="row">
					<div class="col-lg-2" id="imgg"><a href="/"><img src="../img/logo.png" width="147" height="45"></a></div>
						<a href="/" class="col-lg-2">Главная</a>
						<a href="/pages/about_us" class="col-lg-2">О нас</a>
						<a href="/pages/support.php" class="col-lg-2">Поддержка</a>
						<a href="#" class="col-lg-2">Донат</a>
					    <?php 
						if (isset($_SESSION['logged_user'])){ ?>
							<a href='/pages/my_profile'>Мой профиль</a>	
						<?php
						}
						else{ ?>  
						 	<a href="/pages/In" class="col-lg-2">Вход</a>
						<?php } ?>
 			</div>
		</div>
	</div>
	<div class=""></div>
</div>

<div class="container-fluid">
	<div class="imagine-main">
		<div class="prev n"><a href="#" class="a1"><img src="../img/11.png"  width="50px"></a></div>
			<div class="slider">
				<div class="img curry"><img src="../img/3.png" width="600px"></div>
				<div class="img"><img src="../img/4.png"  width="600px"></div>
				<div class="img"><img src="../img/2.png"  width="600px"></div>
				<div class="img"><img src="../img/5.png"  width="600px"></div>
				<div class="img"><img src="../img/1.png"  width="600px"></div>
			</div>
		<div class="next n"><a href="#" class="a1"><img src="../img/12.png"  width="50px"></a></div>
	</div>
</div>




<div class="below">
	<ul>
		<li><a href="#">Инструменты</a></li>
		<li><a href="#">Ноты</a></li>
		<li><a href="#">Оборудование</a></li>
		<li><a href="#">Техника</a></li>
		<li><a href="#">Игры</a></li>
	</ul>
</div>