<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="utf-8">
	
	<title>Kontakt</title>
	
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

<section class="OmOs">
    <section class="sec1">
        <div class="h1--special">
            <h1>Kontakt</h1>
        </div>
        <div class="body">
            <p>
                Du kan kontakte os ved at udfylde formularen nedenunder. Du kan også kontakte os via mail eller telefon på:
                <br>
                <br>
                <span class="p--bold">+45 6547 0978
                <br>
                nykoebingfalster@lions.dk</span>
                <br>
                <br>
                Klubben mødes den første mandag i hver måned klokken 18.00 på addressen:
                <br>
                <br>
                <span class="p--bold">Borgerstiftelsen
                <br>
                Tværgade
                <br>
                4800 Nykøbing F</span>
            </p>
        </div>
        <section class="input">
            <section class="formula">
                <div class="formula__form">
                    <div class="formula__header">
                        <p>Fornavn</p>
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <input id="firstname" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                </div>
                <div class="formula__form">
                    <div class="formula__header">
                        <p>Efternavn</p>
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <input id="surname" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                </div>

                <br>
                <br>

                <div class="formula__form">
                    <div class="formula__header">
                        <p>Email</p>
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <input id="city" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                </div>
                <div class="formula__form">
                    <div class="formula__header">
                        <p>Mobilnummer</p>
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <input id="city" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                </div>
                <div class="formula__form">
                    <div class="formula__header">
                        <p>Hvad drejer henvendelsen sig om?</p>
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <input id="city" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                </div>
                <div class="formula__form">
                    <div class="formula__header">
                        <p>Yderligere information</p>
                    </div>
                    <div class="input-group">
                        <textarea class="form-control" aria-label="With textarea"></textarea>
                    </div>
                </div>
        </section>
    </section>
    <div class="page-button">
        <button type="button" class="btn btn-primary btn-lg">Send</button>
    </div>
    </section>

<!-- Footer -->
<?php include 'include/footer.php';?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
