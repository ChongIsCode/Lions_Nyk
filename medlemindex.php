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
        <div class="header">
            <h1>Bliv medlem</h1>
        </div>
        <div class="body">
            <p>
                Ved at melde dig ind i Lions Nykøbing, kan du gøre en forskel i Guldborgsund Kommune.
                <br>
                <br>
                Som medlem af Lions vil du betale kontigent på 99, kr om måneden. Pengene går ubeskåret til
                humanitære formål og intet af medlemsbidraget går til administration eller mødeudgifter.
            </p>
        </div>
        <div class="header">
            <h2>Info</h2>
        </div>
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
                    <p>Adresse</p>
                </div>
                <div class="input-group input-group-sm mb-3">
                    <input id="address" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
            </div>
            <div class="formula__form">
                <div class="formula__header">
                    <p>Postnummer</p>
                </div>
                <div class="input-group input-group-sm mb-3">
                    <input id="postal" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
            </div>
            <div class="formula__form">
                <div class="formula__header">
                    <p>By</p>
                </div>
                <div class="input-group input-group-sm mb-3">
                    <input id="city" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
            </div>

            <br>
            <br>

            <div class="formula__form">
                <div class="formula__header">
                    <p>Email</p>
                </div>
                <div class="input-group input-group-sm mb-3">
                    <input id="email" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
            </div>
            <div class="formula__form">
                <div class="formula__header">
                    <p>Mobilnummer</p>
                </div>
                <div class="input-group input-group-sm mb-3">
                    <input id="tel" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
            </div>

            <br>
            <br>

            <div class="formula__bday">
                <div class="formula__header">
                    <p>Fødselsdato</p>
                </div>
                <div class="formula__date">
                    <div class="formula__input">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>dd</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                        </select>
                    </div>
                    <div class="formula__input">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>mm</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                    </div>
                    <div class="formula__input--wide">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>åååå</option>
                            <option value="1">2021</option>
                            <option value="2">2020</option>
                            <option value="3">2019</option>
                            <option value="4">2018</option>
                            <option value="5">2017</option>
                            <option value="6">2016</option>
                            <option value="7">2015</option>
                            <option value="8">2014</option>
                            <option value="9">2013</option>
                            <option value="10">2012</option>
                            <option value="11">2011</option>
                            <option value="12">2010</option>
                            <option value="13">2009</option>
                            <option value="14">2008</option>
                            <option value="15">2007</option>
                            <option value="16">2006</option>
                            <option value="17">2005</option>
                            <option value="18">2004</option>
                            <option value="19">2003</option>
                            <option value="20">2002</option>
                            <option value="21">2001</option>
                            <option value="22">2000</option>
                            <option value="23">1999</option>
                            <option value="24">1998</option>
                            <option value="25">1997</option>
                            <option value="26">1996</option>
                            <option value="27">1995</option>
                            <option value="28">1994</option>
                            <option value="29">1993</option>
                            <option value="30">1992</option>
                            <option value="31">1991</option>
                        </select>
                    </div>
                </div>
            </div>
        </section>
        <div class="terms">
            <h2>
                Vilkår og betingelser
            </h2>
            <p>
                Læs venlight vores vilkår og betingelser før, at du melder dig ind.
            </p>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Jeg har læst og accepterer vilkår- og betingelserne
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
