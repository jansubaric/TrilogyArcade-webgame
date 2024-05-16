<!-- Poredak igraca za igru Memory-a u tablici-->
<?php
session_start();
$baza = mysqli_connect("localhost", "root", "", "probni");
$uvjet = "SELECT KORISNICKO_IME, MJESTO_STANOVANJA, TOCNI_MEMORY FROM korisnici ORDER BY TOCNI_MEMORY DESC";
$rezultat = mysqli_query($baza,$uvjet);

printf("<table><tr><td>Mjesto<td><td>Korisničko ime</td>    <td>Mjesto stanovanja</td>     <td>Dobivene igre</td></tr>");
$i = 1;
while($ispis = mysqli_fetch_array($rezultat, MYSQLI_ASSOC) and $i < 7){
	$i++;
	printf("<tr><td>" . $i . "</td><td>%s<td>	<td>%s</td> 	<td>%s</td></tr>", $ispis['KORISNICKO_IME'], $ispis['MJESTO_STANOVANJA'], $ispis['TOCNI_MEMORY']);}

?>