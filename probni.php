<!-- Pocetna stranica za registraciju-->
<html>
<head>
<!--fontovi koje koristimo-->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">

<!--UTF-8 zbog hrvatskih znakova-->
<meta charset="UTF-8">

    <!--postavljanje atributa za praćenje veličine ekrana-->
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    
<title>ARCADE | Prijava i registracija</title>

<!--CSS dokument-->
<link rel="stylesheet" href="login-style.css">
<link rel="stylesheet" href="stylesheet.css">

<!--ikonica koja se pojavljuje zajedno s naslovom-->
<link rel="shortcut icon" href="images/icon.ico" />


<?php
if (isset($_GET["msg"]) && $_GET["msg"] == 'failedpopuni') {
echo "<script type = 'text/javascript'>alert('Popuni sva polja');</script>";
}
if (isset($_GET["msg"]) && $_GET["msg"] == 'failedlozinka') {
echo "<script type = 'text/javascript'>alert('Unio si krivu lozinku');</script>";
}
if (isset($_GET["msg"]) && $_GET["msg"] == 'failedkorime') {
echo "<script type = 'text/javascript'>alert('Korisničko ime je zauzeto');</script>";
}
if (isset($_GET["msg"]) && $_GET["msg"] == 'failedkorisnicko') {
echo "<script type = 'text/javascript'>alert('Unio si krivo korisnicko ime');</script>";
}
if (isset($_GET["msg"]) && $_GET["msg"] == 'failedponloz') {
echo "<script type = 'text/javascript'>alert('Lozinke ti se ne podudaraju');</script>";
}
if (isset($_GET["msg"]) && $_GET["msg"] == 'sat vremena') {
echo "<script type = 'text/javascript'>alert('Proveo si sat vremena na ovoj stranici, odi učiti!!');</script>";
}

?>
<link rel="stylesheet" href="login-style.css">
<?php
	$upozorenjeime = "";
	$upozorenjelozinka = "";
	$upozorenjeregistracija = "";
?>


</head>
<body>

<div class="wrap">
	<div class="login">
		<h1>Prijavi se</h1>
		<form action = "prijava.php" method = "post">
		<br>
		Korisničko ime:
		<br>
		<input type = "text" name = "korisnickoime">
		<br><br>
		Lozinka:<br>
		<input type = "password" name = "lozinka"><br><br>
		<input id="sub" type = "submit" name = "submit" value = "Prijavi se">
		<br><br>
		</form>
	</div>

	<br><br><br>

	<div class="signup">
		<h1>Registriraj se</h1>
		<form action = "registracija.php" method = "post">
		<br><br>
		Korisničko ime:
		<br>
		<input type = "text" name = "korisnickoime">
		<br><br>
		Lozinka:
		<br>
		<input type = "password" name = "lozinka"><br><br>
		Ponovi lozinku:
		<br>
		<input type = "password" name = "lozinkapon"><br><br>
		Mjesto stanovanja:<br>
		<input type = "text" name = "mjestostanovanja"><br><br>
		<input id="sub" type = "submit" name = "submit" value = "Registriraj se"/>
		<br><br><br>
		</form>
	</div>
</div>


<div class="admin">
	<a href = "admini.php">Prijava za admine</a>
</div>



<div class="footer">
	<p>RWA 20/21 | Miličević, Šubarić, Zubčić-Đurđević</p>
</div>



</body>
</html>