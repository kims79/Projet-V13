<!DOCTYPE HTML>
<?php
	include('config.php');
	include('include/function/language.php');
	include('language/' . $_user_lang . '.php');
?>
<html>
	<head>
		<title><?php echo $site_name; ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/login.css" />
	</head>
	<body>
		<div id="page-wrapper">
			<?php 
			//header
				include('include/header.php');
			?>
			<section id="features">
				<img src="images/login.png" width="150" height="96">
				<?php echo $login_information; ?>
			</section>
			<section id="content">
				<div>
					<form name="" action="" method="POST">
					<fieldset>
						<legend><?php echo $login_creat_account; ?></legend>
						<label><?php echo $login_pseudo; ?></label><input type="text"/>
						<label><?php echo $login_email; ?></label><input type="email"/>
						<label><?php echo $login_password; ?></label><input type="password"/>
						<input type="submit" value="M'inscrire"/>
					</fieldset>
					</form>
				</div>
				<div>
					<form name="" action="" method="POST">
					<fieldset>
						<legend><?php echo $login_connect; ?></legend>
						<label><?php echo $login_email; ?></label><input type="text"/>
						<label><?php echo $login_password; ?></label><input type="password"/>
						<input type="submit" value="Connexion"/>
					</fieldset>
					</form>
				</div>
			</section>
			<?php 
			//footer
				include('include/footer.php');
			?>
		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
	</body>
</html>