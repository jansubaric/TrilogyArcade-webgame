<?php 
	session_start();
	if (!isset($_SESSION['korisnik']) or !isset($_SESSION['vrijeme'])){
	session_destroy();
	header("Location: probni.php");
}
	$pocetak = $_SESSION['vrijeme'];
	$sad = time();
	$razlika = $sad - $pocetak;
	
	if($razlika > 3600){
		session_destroy();
		
		header("location:probni.php?msg=satvremena");
	}

//php kod za prijavljenog korisnika i istek vremena


?>