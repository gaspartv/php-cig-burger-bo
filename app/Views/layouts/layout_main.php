<!doctype html>
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
	<link rel="stylesheet" href="<?= base_url("assets/css/main.css") ?>">
</head>
<body>

    <!-- top bar -->
    <?= $this->include('partials/top_bar.php') ?>

    <!-- main -->
    <section class="d-flex">
        <!-- main menu -->
        <nav class="main-menu p-2">
            <?= $this->include('partials/main_menu.php') ?>
        </nav>

        <!-- main content -->
        <div class="content p-4">
			<?= $this->renderSection('content') ?>
        </div>
    </section>

    <!-- footer -->
	<?= $this->include('partials/footer.php') ?>

    <!-- Bootstrap JS -->
    <script src="<?= base_url("assets/libs/bootstrap/bootstrap.bundle.min.js") ?>"></script>

    <script>
        document.querySelector(".btn-main-menu").addEventListener("click", () => {
            document.querySelector(".main-menu").classList.toggle("show");
            document.querySelector(".content").classList.toggle("show");
        })
    </script>
</body>
</html>
