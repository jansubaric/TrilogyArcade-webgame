<!-- Registracija novih korisnika te njihov upis u bazu-->
<?php
	
	$korisnickoime = $_POST['korisnickoime'];
	$lozinka = $_POST['lozinka'];
	$lozinkapon = $_POST['lozinkapon'];
	$mjestostanovanja = $_POST['mjestostanovanja'];
	
	$baza = mysqli_connect('localhost', 'root', '','probni');
	
	
	
	if ($baza == FALSE){
	echo "Pogreška: Nemoguće uspostaviti vezu." . PHP_EOL;
	echo "" . mysqli_connect_errno() . PHP_EOL;
	echo "" . mysqli_connect_error() . PHP_EOL;
	exit;
}
//Upzorava korisnika da mora popuniti preostala polja
	if(empty($korisnickoime) or empty($lozinka) or empty($mjestostanovanja)){
				header("location:probni.php?msg=failedpopuni");
				

				}
	else if($lozinka != $lozinkapon){
		header("location:probni.php?msg=failedponloz");}
	else{
	//korisnik vec postoji
	$uvjet = "SELECT * FROM korisnici WHERE KORISNICKO_IME = '$korisnickoime'";
	$vecpostoji = mysqli_query($baza,$uvjet);
	$vecpostojibr = mysqli_num_rows($vecpostoji);
	
	
	
	if($vecpostojibr > 0){
		header("location:probni.php?msg=failedkorime");
	}
	
	else{
		
		
	$i = "SELECT * FROM korisnici";
	$ni = mysqli_query($baza,$i);
	
	$brredaka=mysqli_num_rows($ni);
	
	$br = $brredaka + 10;
	
	
	$j = "SELECT * FROM korisnici WHERE ID_KORISNIKA = $br";
	$ji = mysqli_query($baza,$j);
	if(!empty($ji)){
			$idkorisnika = $br;	
		}
	else{
	$idkorisnika = $br+10;}	
	

	$mjesto = "INSERT INTO korisnici(USER_ID, KORISNICKO_IME, LOZINKA, MJESTO_STANOVANJA) VALUES ('$idkorisnika','$korisnickoime','$lozinka','$mjestostanovanja')";
	$umetanje = mysqli_query($baza,$mjesto);
	
	if($umetanje == TRUE) {
		
		
		$time = time();
		session_start();
		$_SESSION['korisnik'] = $korisnickoime;
		$_SESSION['vrijeme'] = $time;
		header('Location:main.php');
		
}
	}
	mysqli_close ($baza);}
	
	

	
?>  

