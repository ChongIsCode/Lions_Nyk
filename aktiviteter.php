<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Aktiviteter</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>
<?php include 'include/menu.php';?>

<div class="header">
    <h1>Det gør vi</h1>
</div>
<div class="content">
    <h3>Internationale relationer<br></h3>
    <img src="images/Bolivia2.jpg" width="75%" class="img-fluid" alt="...">
    <p>Som verdens største private humanitære hjælpeorganisation,<br>
        deltager Lions gennem sit mangfoldige arbejde med <br>
        internationale projekter indenfor følgende hovedområder:<br><br>

        1. Nationalt og internationalt hjælpeprojektarbejde<br>
        2. Udveksling og uddannelsestilbud<br>
        3. Venskabsklubber<br></p>
</div>
<div class="content">
    <h3>Nordisk Samråds Projekter - NSR<br></h3>
    <img src="images/NSR_2010_5166a.jpg" width="75%" class="img-fluid" alt="...">
    <p>På fællesnordisk plan gennemfører Lions<br>
        en række større projekter, kaldet NSR-projekter.<br><br>

        Projekterne går normalt over to år og udvikles og styres<br>
        på skift af de enkelte lande i norden.<br><br></p>
</div>
<div class="content">
    <h3>Lions samler donationer til <br>
        kræftens bekæmpelse<br></h3>
    <img src="images/Icane_kursus_2_web.jpg" width="75%" class="img-fluid" alt="...">
    <p>Helen Keller opfordrede i 1925 lions til at blive "de blindes<br>
        riddere". Siden da har lions arbejdet rigtig meget <br>
        med kampen mod unødvendig blindhed og med hjælp til <br>
        blinde og svagsynede.<br><br>

        Senest har Lions været med til udviklingen af I-cane, <br>
        den elektroniske "Hvide stok".<br></p>
</div>
<!-- Tilbage til top knap -->
<?php include 'include/backtotop.php';?>

<!-- Footer -->
<?php include 'include/footer.php';?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
