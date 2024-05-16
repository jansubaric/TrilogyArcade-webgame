<!-- Prikaz igraca i njihovigh podatataka, vidljivo samo adminima stranice -->
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
<meta charset="UTF-8">
<title>Poredak (admini)</title>
<link rel="stylesheet" href="poredak.css">
</head>

<body>
<div>
<?php
echo"<style type = 'text/css'> table, th, td {border: 1px solid black; text-align:center; width:50%;font-size:30;margin-left: auto;margin-right: auto;}</style>";
echo"<style type = 'text/css'> div{text-align:center; position:center;}</style>";

$baza = mysqli_connect("localhost", "root", "", "probni");
$uvjet = "SELECT USER_ID, KORISNICKO_IME, LOZINKA, MJESTO_STANOVANJA, TOCNI_VJESALA FROM korisnici ORDER BY USER_ID ASC";
$rezultat = mysqli_query($baza,$uvjet);

printf("<table class='tablica'><tr><td>Id korisnika</td><td>Korisničko ime</td> <td>Lozinka</td>   <td>Mjesto stanovanja</td>     <td>Dobivene igre-Vješala</td></tr>");
$i = 0;
while($ispis = mysqli_fetch_array($rezultat, MYSQLI_ASSOC)){
	$i++;
	printf("<tr> <td>%s</td>	<td>%s</td> 	<td>%s</td>    <td>%s</td>    <td>%s</td>   </tr>", $ispis['USER_ID'],  $ispis['KORISNICKO_IME'], $ispis['LOZINKA'],  $ispis['MJESTO_STANOVANJA'], $ispis['TOCNI_VJESALA']);}
echo"</table>";
?>
</div>
<br><br><br>
<div class="center">
	<input class="btn" type = 'button' id = 'vrati se' value = 'Odjavi se' onclick = 'javascript:window.location.href="odjava.php"'>

		

</div>
</body>
</html>

