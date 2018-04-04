<?php ob_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<?php include("/includes/head.php"); ?>
</head>
<body>
	<!-- ШАПКА -->
	<div class="header">
		<?php include("includes/header.php"); ?>
	</div>
	<!-- ШАПКА -->

	<!-- КОНТЕНТ -->
	<div class="content">
		<div class="container">		
			<div class="vst">
				<div class="row">
					<div class="col-lg-6">
						<b>Акустическая гитара</b>
						<p>Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона.</p>
					</div>
					<div class="col-lg-6"><img src="img/vst.jpg" width="500" height="300"></div>
				</div>
			</div>

			<div class="Plug">
				<div class="row">
					<div class="col-lg-6"><img src="img/Plug.jpg" width="450" height="300"></div>
					<div class="col-lg-6">
						<b>Барабаны</b>
						<p>Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона.</p>
					</div>
				</div>
			</div>

			<div class="vst">
				<div class="row">
					<div class="col-lg-6">
						<b>Пианино</b>
						<p>Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона.</p>
					</div>
					<div class="col-lg-6"><img src="img/midi.jpg" width="460" height="300"></div>
				</div>
			</div>
			<div class="Plug">
				<div class="row">
					<div class="col-lg-6"><img src="img/akai.jpg" width="460" height="300"></div>
					<div class="col-lg-6">
						<b>Комбики</b>
						<p>Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- КОНТЕНТ -->

	<!-- ФУТЕР -->
		<div class="footer">
			<?php include("includes/footer.php") ?>
		</div>
	<!-- ФУТЕР -->

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
<?php ob_end_flush(); ?>