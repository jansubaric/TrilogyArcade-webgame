<!-- Azurira korisnicke bodove u bazi podataka i prikazuje stranicu za gubitak-->
<html>
<head>
<link rel="shortcut icon" href="images/icon.ico" />

<?php
session_start();
$baza = mysqli_connect("localhost", "root", "", "probni");  
		$korisnickoime = $_SESSION['korisnik'];
		$uvjet = "SELECT TOCNI_VJESALA from korisnici where KORISNICKO_IME = '$korisnickoime'";
		$staribr = mysqli_query($baza, $uvjet);
		$novibr = mysqli_fetch_assoc($staribr);
		$broj = (int) $novibr['TOCNI_VJESALA'];
		$broj--;
		$promjena = "UPDATE korisnici set TOCNI_VJESALA = '$broj' where KORISNICKO_IME = '$korisnickoime'";
		$izvrsi = mysqli_query($baza, $promjena);
		mysqli_close($baza);
		
?>

<link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
<meta charset="UTF-8">
<title>Izgubio si!</title>
<link rel="stylesheet" href="stylesheet-gubitak.css">
</head>
<body>

<div style = 'text-align : center;'>
	<h1 class="gubitak">ŽAO NAM JE :( </h1>
	<br>
	<img src = 'images/looser.png'/>
	<h2>TOČAN ODGOVOR : 
	<script type = "text/javascript">
	var rjesenje = sessionStorage.getItem("rjesenje");
	document.write(rjesenje);
	</script>
	<h2>
	<br><br>


	<input class="btn" type = 'button' id = 'refresh' value = 'IGRAJ PONOVNO' onclick = 'javascript:window.location.href="hangman.php"'>
	</div>
	<div>
	<div style = 'text-align : center;'>
	<?php include('vjesalaporedak.php'); ?>
	</div>
	</div>
	

</body>
</html>