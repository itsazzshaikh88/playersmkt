<!DOCTYPE html>
<html lang="en">

<head>
	<base href="<?= base_url() ?>">
	<!-- Basic -->
	<meta charset="utf-8">
	<title><?= isset($app_title) ? $app_title : APP_NAME . " - Showcase your talent" ?></title>
	<meta name="keywords" content="playersmkt" />
	<meta name="description" content="PlayersMkt - Connecting Talented Players with Clubs Worldwide">
	<meta name="author" content="playersmkt.com">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<link href="assets/css/main.css" rel="stylesheet" media="screen">
	<link href="assets/css/app.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- Favicons -->
	<link rel="shortcut icon" href="img/icons/favicon.ico">
	<link rel="apple-touch-icon" href="img/icons/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/icons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/icons/apple-touch-icon-114x114.png">
	<!-- Dynamic CSS  -->
	<?php
	if (isset($css_files) && !empty($css_files)) :
		foreach ($css_files as $css_file) :
	?>
			<link href="<?= $css_file ?>" rel="stylesheet" />
	<?php
		endforeach;
	endif;
	?>
</head>

<body>

	<!-- layout-->
	<div id="layout">
		<!-- Include Navbar & Header 	 -->
		<?php include_once '__navbar.php' ?>