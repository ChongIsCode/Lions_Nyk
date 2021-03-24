<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Lions samler donationer ...</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>
<?php include 'include/menu.php';?>

<div>
    <img src="images/Kræftens-Bekæmpelse2.jpg" width="100%" class="img-fluid" alt="Dreng der står og modtager penge til donationer">

    <div class="nyhed">
        <br>
        <h3>Lions samler donationer til kræftens bekæmpelse</h3><br>

        <p>Lions har samlet 700.000kr til organisationen kræftens bekæmpelse i 2020.<br><br>
            Kræft er en forfærdelig sygdom, som vi den dag i dag, ikke har fundet en primær løsning til.<br>
            Denne donation er med til at forske om yderligere hjælp til at kurere kræft.<br><br>
            Kræft er en sygdom i cellerne, som opstår, hvis cellerne et sted i kroppen begynder at vokse uden kontrol og uden formål. Kræft er også kaldet cancer.<br>
            I alle kroppens celler findes arvemateriale, som styrer cellens aktivitet. Kræftceller kan udvikle sig, hvis arvematerialet bliver beskadiget og muterer.<br><br>
            Det kan være en voldsom oplevelse at få at vide, at man har kræft. Det kan hjælpe at dele sin tanker med andre<br>
            og forsøge at skabe et overblik over sygdom og behandling. Du kan læse mere her:<br>
            https://www.cancer.dk/hjaelp-viden/hvis-du-har-kraeft/psykiske-reaktioner/<br><br>
            Lions Danmark sørger for at alle pengene går konkret til forskning af kræftens bekæmpelse.<br>
            Vær med til at støtte donationen til kræftens bekæmpelse, eller fremtidige donationer her:<br><br>

        <a href="donerindex.php">
            <div class="page-button">
                <button type="button" class="btn btn-secondary btn-lg">Støt</button>
            </div>
        </a>

            <!-- Tilbage til top knap -->
            <?php include 'include/backtotop.php';?>

        </p>
    </div>
</div>

<!-- Footer -->
<?php include 'include/footer.php';?>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
