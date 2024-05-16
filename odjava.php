<!-- Odjava korisnika tj brisanje cookie-ja i redirekcija na prijavu -->
<?php

error_reporting(E_ERROR);

unset($_SESSION["korisnik"]);
unset($_SESSION["vrijeme"]);
session_destroy();
header("Location:probni.php");

?>



