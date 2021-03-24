<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Vores sponsorere</title>

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

<div class="sponsor">
    <h3>Denne side bliver hele tiden opdateret</h3>

    <h2>Vores sponsorere</h2>

    <ul>
        <li>Skanlux Hosting A/S</li>
        <li>Glarmester Aage Larsen</li>
        <li>Lindholm Auto</li>
        <li>Marius Mortensen Eftf. Slots-garden A/S</li>
        <li>AJ Consult</li>
        <li>Xl-byg C.</li>
        <li>Aarslew Jensen</li>
        <li>Arbejdernes Landsbank</li>
        <li>Lollands Bank</li>
        <li>Kikko</li>
        <li>Odin Holm</li>
        <li>Meny Parkvej</li>
        <li>John Ole Hansen</li>
        <li>Papir & Kontor-centreret ApS</li>
        <li>Sonny VVS</li>
        <li>Frimann Biler</li>
        <li>Nordea</li>
        <li>Meny Havnen</li>
        <li>Toreby Købmandshandel</li>
        <li>P. Hatten & Co.</li>
        <li>Colourplus</li>
        <li>Stark</li>
        <li>Ejegodslagteren</li>
        <li>Papaya-Catwalk</li>
        <li>Beirholm</li>
        <li>Kvickly</li>
        <li>Barlund & Marger</li>
    </ul>
</div>

<!-- Footer -->
<?php include 'include/footer.php';?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
