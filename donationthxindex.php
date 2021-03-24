<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="utf-8">
	
	<title>Tak for din donation!</title>
	
	<meta name="robots" content="All">
	<meta name="author" content="Udgiver">
	<meta name="copyright" content="Information om copyright">
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/styles.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">

	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<!-- Menu -->
<?php include 'include/menu.php';?>

<section class="sec1">
    <div class="h1--special">
        <h1><span class="h--italic">Tak for din donation!</span></h1>
    </div>
    <div class="body">
        <p>
            Vi takker mange gange for din velgørende donation.
            <br>
            <br>
            Du kan være sikker på, at pengene går til dem, som har brug for det.
        </p>
    </div>
    <div class="donate">
        <div class="donate__info">
            <div class="donate__text">
                <h2>
                    Du har doneret:
                </h2>
            </div>
            <div class="donate__amount">
                <h3>
                    200 kr.
                </h3>
            </div>
        </div>
        <div class="page-button--small">
            <button type="button" class="btn btn-success btn-sm">Del på Facebook</button>
            <button type="button" class="btn btn-warning btn-sm">Del på Instagram</button>
        </div>
    </div>
</section>

<!-- Footer -->
<?php include 'include/footer.php';?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
