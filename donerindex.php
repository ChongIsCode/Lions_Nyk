<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="utf-8">
	
	<title>Sigende titel</title>
	
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

<div class="OmOs">
    <section class="sec1">
        <div class="h1--special">
            <h1>Din støtte gør en forskel</h1>
        </div>
        <div class="h2--special">
            <h2>Hver en krone tæller</h2>
            <div class="header__line">
            </div>
        </div>
        <div class="body">
            <p>
                100% af din donation går ubeskåret til humanitære formål. Det vil altså sige at hver en krone
                du donere vil gå til dem, som har brug for det.
            </p>
        </div>
        <section class="input">
            <div class="header">
                <h2>Beløb i DKK</h2>
            </div>
            <div class="input__form">
                <div class="input-group input-group-sm mb-3">
                    <input id="firstname" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
            </div>
            <div class="header">
                <h2>Skal det være en månedlig donation?</h2>
            </div>
            <div class="input__text">
                <p>
                    Donationen vil blive opkrævet den 5. I måneden, og du kan til enhver tid afmelde dit abonnement.
                </p>
            </div>
            <div class="input__form">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Engangs</option>
                    <option value="1">Månedlig</option>
                    <option value="2">Årlig</option>
                    <option value="3">Kvartal</option>
                </select>
            </div>
            <div class="header">
                <h2>Betalingsmetode</h2>
            </div>
            <div class="input__form">
                <select class="form-select" aria-label="Default select example">
                    <option selected>MobilePay</option>
                    <option value="1">Dankort</option>
                    <option value="2">Visa</option>
                    <option value="3">Mastercard</option>
                </select>
            </div>
        </section>
        <div class="terms">
            <h2>
                Anonym donation?
            </h2>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Som anynym doner vil ingen kunne se dit navn
            </label>
        </div>
    </section>
    <div class="backtotop">
        SEJ KNAP HER
    </div>
</div>

<!-- Footer -->
<?php include 'include/footer.php';?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
