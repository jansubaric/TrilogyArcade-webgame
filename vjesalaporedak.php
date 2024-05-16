<?php
//Prikaz tablice igraca i njihovih postignuca za igru vjesala 
$baza = mysqli_connect("localhost", "root", "", "probni");
$uvjet = "SELECT KORISNICKO_IME, MJESTO_STANOVANJA, TOCNI_VJESALA FROM korisnici ORDER BY TOCNI_VJESALA DESC";
$rezultat = mysqli_query($baza,$uvjet);

printf("<table><tr>   <td>Mjesto</td>    <td>Korisničko ime</td>    <td>Mjesto stanovanja</td>     <td>Dobivene igre</td>	</tr>");
$i = 0;
while($ispis = mysqli_fetch_array($rezultat, MYSQLI_ASSOC) and $i < 6){
	$i++;
	printf("<tr>   <td>%s</td>    <td>%s</td>	<td>%s</td> 	<td>%s</td>  </tr>", $i, $ispis['KORISNICKO_IME'], $ispis['MJESTO_STANOVANJA'], $ispis['TOCNI_VJESALA']);}

?>