
<html>

<title>IGRA VJEŠALA</title>

<head>

<meta charset="utf-8">
<style type = "text/css">
h1{text-align : center;}
div{text-align : center;}
.rozo{background-color:pink;
		color: black;}
.sredina{text-align : center;}
body
{
    font-family: "Times New Roman", Times, serif;
}

</style>
<script type = "text/javascript">
//Liste s tocnim odgovorima
var domene = ["grad" , "drzava" , "predmet" , "zivotinja"];
var grad = ["RIJEKA" , "ZAGREB" , "DUBROVNIK" , "OSIJEK", "MUNCHEN" , "SPLIT" , "PULA" , "BERLIN", "AMSTERDAM" , "MIAMI" , "WASHINGTON" , "OSLO", "RIM" , "DUBLIN" , "LONDON" , "KRK"];
var drzava = ["HRVATSKA" , "SRBIJA" , "ITALIJA" , "KINA", "NIGERIJA" , "NIZOZEMSKA" , "NORVEŠKA" , "ČEŠKA", "SLOVAČKA" , "MAKEDONIJA" , "RUSIJA" , "IRAN", "FRANCUSKA" , "NJEMAČKA" , "AFGANISTAN" , "POLJSKA"];
var predmet = ["JASTUK" , "ZAVJESA" , "STOL" , "STOLICA", "MOBITEL" , "KREVET" , "PAPIR" , "OLOVKA", "TANJUR" , "ZDJELA" , "ČETKA" , "VILICA", "SLIKA" , "PIŠTOLJ" , "TORBA" , "TENISICA"];
var zivotinja = ["GUSJENICA" , "ZEBRA" , "KRAVA" , "ZMIJA", "KONJ" , "MAGARAC" , "PTICA" , "ZEC", "JEŽ" , "BOGOMOLJKA" , "PAS" , "MAČKA", "RIBA" , "LEOPARD" , "GEPARD" , "BOŠKARIN"];
//Korisnicki unos
var rjesenje = [];
var a = "";


//Bira nasumican broj koji predstavlja polje
var broj = Math.floor(Math.random() * domene.length);
if(broj == 0){
		rjesenje = grad[Math.floor(Math.random() * grad.length)]; //Odabire nasumicnu rijec
		a = "GRAD";
}
else if(broj == 1){
		rjesenje = drzava[Math.floor(Math.random() * drzava.length)];
		a = "DRŽAVU";
}
else if(broj == 2){
		rjesenje = predmet[Math.floor(Math.random() * predmet.length)];
		a = "PREDMET";
}
else if(broj == 3){
		rjesenje = zivotinja[Math.floor(Math.random() * zivotinja.length)];
		a = "ŽIVOTINJU";
}

var string;
var brojac = 0;
var praznalista = [];
var i;
var iskoristena = [];
var tocni = 0;

//Prikazuje prazno polje
function praznal(){
	
	document.getElementById("dom").innerHTML = a;
	for(i = 0; i < rjesenje.length; i++){
	
		praznalista[i] = "_";
	}
	string = praznalista.join(" ");
	document.getElementById("odgovor").innerHTML = string;

}
//Provjerava slovo i ukoliko je korisnik pobjedio/izgubio
//Ne inkrementiramo broj gresaka ako je slovo vec odabrano
function slovo(){
	var unos = document.getElementById("slovo").value;
	document.getElementById("slovo").value = "";
	unos = unos.toUpperCase();
	var k = 0;
	if(unos.length == 1){
		for(i = 0; i < iskoristena.length; i++){
			if(iskoristena[i] == unos){
				k = 1;
			}
		}
		if(k != 1){
				for(i = 0; i < rjesenje.length; i++){
					if(rjesenje[i] == unos){
					praznalista[i] = unos;
					k = 2;
					tocni++;
			}
		}}
		
		
		if(k == 0){document.getElementById("poruka").innerHTML = "LOŠ ODABIR"; brojac++}
		else if(k == 1){document.getElementById("poruka").innerHTML = "SLOVO  " + unos + "  SI VEĆ ISKORISTIO";}
		else if(k == 2){document.getElementById("poruka").innerHTML = "DOBAR ODABIR";}
		
		
	iskoristena += unos;
	
	document.getElementById("brojac").innerHTML = brojac;
	
	document.getElementById("odgovor").innerHTML = praznalista.join(" ");
	document.getElementById("slika").innerHTML = "<img src = 'pogreska" + brojac + ".png'>"
	
	}
	//Gubitak
	if(brojac > 7){
	document.write("<div style = 'text-align : center;'>");
	document.write("<h1>ŽAO NAM JE, IZGUBIO SI :( <br></h1>");
	document.write("<img src = 'looser.png'/>");
	document.write("<h2>TOČAN ODGOVOR: " + rjesenje + "<br></h2>");
	document.write("<input type = 'button' id = 'refresh' value = 'IGRAJ PONOVNO' onclick = 'location.reload()'>");
	document.write("</div>");}
	
	
	//Korisnik pobjedio
	if(tocni === rjesenje.length){
		sessionStorage.setItem("rjesenje", rjesenje);
		window.location.href = "BRAVO.php";
	exit();}
	
	
	

	
}
</script>


</head>
<!-- Prikaz odabrane rijeci i slova-->
<body onLoad = "praznal();">
<div>
<div  class = "rozo"><h1>POGODI <span id = "dom"></span></h1></div><br><br>
<input type = "text" id = "slovo" onchange = "slovo()"/>
<input type = "submit" class = "rozo" value = "UNESI" onclick = "slovo();"/>


<!-- Broj gresaka -->
<h2 id = "odgovor"></h2><br>
NETOČNI ODGOVORI: <span id = "brojac">0</span>/7<br>
<p id = "poruka"></p><br>
<b id = "slika" ></b>
</div>
</body>
</meta>
</html>