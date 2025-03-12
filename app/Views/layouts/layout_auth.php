<<!doctype html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>CigBurger Backoffice</title>

    <!-- favicon -->
    <link rel="icon" href="<?= base_url("assets/images/logo.png") ?>" type="image/png">
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url("assets/libs/bootstrap/bootstrap.min.css") ?>">

	<!-- Font Awesome CSS -->
	<link rel="stylesheet" href="<?= base_url("assets/libs/fontawesome/all-min.css") ?>">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@500;700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
	<link rel="stylesheet" href="<?= base_url("assets/css/login.css") ?>">
</head>
<body class="login-page-background">

	<!-- render section -->
	<?= $this->renderSection('content') ?>

    <!-- Bootstrap JS -->
    <script src="<?= base_url("assets/libs/bootstrap/bootstrap.bundle.min.js") ?>"></script>
</body>
</html>
