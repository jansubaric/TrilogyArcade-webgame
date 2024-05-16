<!-- Provjerava je li korisnik admin -->
<?php 
	
	$korisnickoime = $_POST['korisnickoime'];
	$lozinka = $_POST['lozinka'];

	
	$baza = mysqli_connect('localhost', 'root', '','probni');
	
	if ($baza == FALSE){
	echo "Pogreška: Nemoguće uspostaviti vezu." . PHP_EOL;
	echo "" . mysqli_connect_errno() . PHP_EOL;
	echo "" . mysqli_connect_error() . PHP_EOL;
	exit;}
	
	
	if($korisnickoime == "" or $lozinka == ""){
				echo "Popuni sva polja!";
				header("location:admini.php?msg=failedpopuni");
			
				exit;}
				
				
	$uvjet = "SELECT * FROM admini WHERE KORISNICKO_IME = '$korisnickoime'";
	$bazakorisnicko =  mysqli_query($baza, $uvjet);
	$bazakorisnickored = mysqli_num_rows($bazakorisnicko);
	
	
	if($bazakorisnickored == 0){
		header("location:admini.php?msg=failedkorisnicko");
				
				}
				
	else{
		
		$lozinkaUVJET = "SELECT * FROM admini WHERE KORISNICKO_IME = '$korisnickoime' && LOZINKA = '$lozinka'";
		$bazalozinka = mysqli_query($baza, $lozinkaUVJET);
		$bazabrredaka = mysqli_num_rows($bazalozinka);
		if($bazabrredaka == 1){
			session_start();
			$_SESSION['korisnik'] = $korisnickoime;
			$time = time();
			$_SESSION['vrijeme'] = $time;
			
			header('Location:stranica-za-admine.php');
			
		}
		else{
			echo("kriva lozinka");
			header("location:admini.php?msg=failedlozinka");

		
	}
	}
	
	

	
	mysqli_close ($baza);

	
?>  