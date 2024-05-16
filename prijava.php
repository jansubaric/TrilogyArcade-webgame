<!-- Provjerava je li korisnik registriran i ako je tocna lozinka -->
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
				header("location:probni.php?msg=failedpopuni");
			
				exit;}
				
				
	$uvjet = "SELECT * FROM korisnici WHERE KORISNICKO_IME = '$korisnickoime'";
	$bazakorisnicko =  mysqli_query($baza, $uvjet);
	$bazakorisnickored = mysqli_num_rows($bazakorisnicko);
	
	
	if($bazakorisnickored == 0){
		header("location:probni.php?msg=failedkorisnicko");
				
				}
				
	else{
		
		$lozinkaUVJET = "SELECT * FROM korisnici WHERE KORISNICKO_IME = '$korisnickoime' && LOZINKA = '$lozinka'";
		$bazalozinka = mysqli_query($baza, $lozinkaUVJET);
		$bazabrredaka = mysqli_num_rows($bazalozinka);
		if($bazabrredaka == 1){
			
			$time = time();
			session_start();
			$_SESSION['korisnik'] = $korisnickoime;
			$_SESSION['vrijeme'] = $time;
			header('Location:main.php');
			
		}
		else{
			echo("kriva lozinka");
			header("location:probni.php?msg=failedlozinka");

		
	}
	}
	
	
	

	
	mysqli_close ($baza);

	
?>  