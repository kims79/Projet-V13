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
	</head>
	<body>
		<div id="page-wrapper">
			<?php 
			//header
				include('include/header.php');
			//Features
				include('include/features.php');
			//Content
				include('include/content.php'); 
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