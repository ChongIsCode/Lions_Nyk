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
<div class="header">
    <h1>Det gør vi</h1>
</div>
<div class="content">
    <h3>Internationale relationer<br></h3>
    <img src="images/3.jpg"width="65%">
    <p>Som verdens største private humanitære hjælpeorganisation,<br>
        deltager Lions gennem sit mangfoldige arbejde med internationale <br>
        projekter indenfor følgende hovedområder:<br><br>

        1. Nationalt og internationalt hjælpeprojektarbejde<br>
        2. Udveksling og uddannelsestilbud<br>
        3. Venskabsklubber<br></p>
</div>
<div class="content">
    <h3>Nordisk Samråds Projekter - NSR<br></h3>
    <img src="images/3.jpg"width="65%">
    <p>På fællesnordisk plan gennemfører Lions<br>
        en række større projekter, kaldet NSR-projekter.<br><br>

        Projekterne går normalt over to år og udvikles og styres<br>
        på skift af de enkelte lande i norden.<br><br></p>
</div>
<div class="content">
    <h3>Lions samler donationer til
        kræftens bekæmpelse<br></h3>
    <img src="images/3.jpg"width="65%">
    <p>Helen Keller opfordrede i 1925 lions til at blive "de blindes riddere".<br>
        Siden da har lions arbejdet rigtig meget <br>
        med kampen mod unødvendig blindhed og med hjælp til <br>
        blinde og svagsynede.<br><br>

        Senest har Lions været med til udviklingen af I-cane, <br>
        den elektroniske "Hvide stok".<br></p>
</div>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
