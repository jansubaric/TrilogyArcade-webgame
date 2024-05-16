<?php include('sessionstart.php'); ?>
<html>

<head>
	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Vješala</title>
	<link rel="stylesheet" href="stylesheet-vj.css">

	<!--ikonica koja se pojavljuje zajedno s naslovom-->
	<link rel="shortcut icon" href="images/icon.ico" />

<script>
var domene = ["grad" , "drzava" , "predmet" , "zivotinja"];
var grad = ["RIJEKA" , "ZAGREB" , "DUBROVNIK" , "OSIJEK", "MUNCHEN" , "SPLIT" , "PULA" , "BERLIN", "AMSTERDAM" , "MIAMI" , "WASHINGTON" , "OSLO", "RIM" , "DUBLIN" , "LONDON" , "KRK"];
var drzava = ["HRVATSKA" , "SRBIJA" , "ITALIJA" , "KINA", "NIGERIJA" , "NIZOZEMSKA" , "NORVEŠKA" , "ČEŠKA", "SLOVAČKA" , "MAKEDONIJA" , "RUSIJA" , "IRAN", "FRANCUSKA" , "NJEMAČKA" , "AFGANISTAN" , "POLJSKA"];
var predmet = ["JASTUK" , "ZAVJESA" , "STOL" , "STOLICA", "MOBITEL" , "KREVET" , "PAPIR" , "OLOVKA", "TANJUR" , "ZDJELA" , "ČETKA" , "VILICA", "SLIKA" , "PIŠTOLJ" , "TORBA" , "TENISICA"];
var zivotinja = ["GUSJENICA" , "ZEBRA" , "KRAVA" , "ZMIJA", "KONJ" , "MAGARAC" , "PTICA" , "ZEC", "JEŽ" , "BOGOMOLJKA" , "PAS" , "MAČKA", "RIBA" , "LEOPARD" , "GEPARD" , "BOŠKARIN"];
var rjesenje = [];
var a = "";



var broj = Math.floor(Math.random() * domene.length);
if(broj == 0){
		rjesenje = grad[Math.floor(Math.random() * grad.length)];
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

function praznal(){
	
	document.getElementById("dom").innerHTML = a;
	for(i = 0; i < rjesenje.length; i++){
	
		praznalista[i] = "_";
	}
	string = praznalista.join(" ");
	document.getElementById("odgovor").innerHTML = string;

}

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
	document.getElementById("slika").innerHTML = "<img src = 'images/pogreska" + brojac + ".png'>"
	
	}
	

	/*DODATI SLIKE POBJEDA I PORAZ NA ZASLON ZA POBJEDU I PORAZ*/
	if(brojac > 7){
	<!-- document.write("<div style = 'text-align : center;'>"); -->
	<!-- document.write("<h1>ŽAO NAM JE, IZGUBIO SI :( <br></h1>"); -->
	<!-- document.write("<img src = 'images/looser.png'/>");  -->
	<!-- document.write("<h2>TOČAN ODGOVOR: " + rjesenje + "<br></h2>");  -->
	<!-- document.write("<input type = 'button' id = 'refresh' value = 'IGRAJ PONOVNO' onclick = 'location.reload()'>");  -->
	<!-- document.write("</div>");} -->
	
	sessionStorage.setItem("rjesenje", rjesenje);
		window.location.href = "GUBITAK.php";
		exit();}
	

	/* NA POBJEDU/GUBITAK DODATI ALERT I ZAIGRAJ PONOVO
	if(brojac > 7){
		alert("Žao nam je, izgubio si!");
	}
	*/
	
	
	
	if(tocni === rjesenje.length){
		sessionStorage.setItem("rjesenje", rjesenje);
		window.location.href = "BRAVO.php";
		exit();}
	
}

</script>
</head>

<body onLoad = "praznal();">


	<!--SREDITI VELIČINU SLIKA ZA MOBILNI PRIKAZ-->

	<!--srediti game body; dodati animaciju na dugme 'unesi'-->

	<!--
    navigation bar sa strane dokumenta
  	-->
  <nav> 
    <ul class="sidenav"> 
        <!--logo gif-->
        <img class="logo-image" src="images/play.gif"/>

        <!--lista linkova za navigaciju-->
        <li><a href="main.php">Home</a></li> 
		<li><a href="o-nama.php">O nama</a></li> 
        <li><a href="memory.php">Memory</a></li> 
        <li><a href="krizickruzic.php">Križić-kružić</a></li> 
		<li><a href="odjava.php">Odjavi se</a></li> 
		<!-- <form action = "https://www.youtube.com/watch?v=leW9ZotUVYo" action = "post">
		<input type = "submit" value = "KAKO IGRATI?" class = "yt"/>
		</form>  -->
		
        <!--još jedna slika za ukras i malo CSS demonstracije-->
        <img class="bottom-image" src="images/proba2.png"/>
    </ul> 
    

  <!--
    dropdown - za mobilne uređaje
    (nav stupac će tada nestati i zamijenit će se ovim)
  -->
      <div class="dropdown">
        <button class="dropbtn">Navigacija</button>
        <div class="dropdown-content">
          <a href="main.php">Home</a> 
          <a href="o-nama.php">O nama</a> 
          <a href="memory.php">Memory</a> 
          <a href="krizickruzic.php">Križić-kružić</a> 
		  <a href="odjava.php">Odjavi se</a>
		 <!--  <form action = "https://www.youtube.com/watch?v=leW9ZotUVYo" action = "post">
		  <input type = "submit" value = "KAKO IGRATI?" class = "yt"/>
		  </form> -->
		  
		  
        </div>
      </div> 

  
  </nav>
	
	<header>
        <!--h1 class="text-center mt-4 mb-2 headTag">MEMORY</h1--->
        <h1 class="glavni">arcade</h1>
    </header>

<div>


<div  class = "pogodi">
	<h1>POGODI
		<span id = "dom"></span>
	</h1>
</div>


<section class="game-body">
	<input type = "text" id = "slovo" onchange = "slovo()"/>
	<input type = "submit" class = "rozo" value = "UNESI" onclick = "slovo();"/>
	
	<h2 id = "odgovor"></h2><br>
	NETOČNI ODGOVORI: <span id = "brojac">0</span>/7<br>
	
	<p id = "poruka"></p><br>

	<b id = "slika" class="vj-img"></b>
	</div>
</section>

<!--sekcija za oglase-->
<section class="oglasi">

    <!--i oglasi imaju svoj container-->
      <div class="oglasi-cont">
      <!--
        kako se oglasi daju na random,
        scriptom ćemo uzimati random brojeve slika
      -->
      <script type="text/javascript">
      // nasumično generiranje brojeva
      br1 = Math.floor((Math.random() * 8) + 1);
      br2 = Math.floor((Math.random() * 8) + 1);
      //br3 = Math.floor((Math.random() * 8) + 1);

      // osiguravanje da nemamo 2 ista oglasa
      if(br1 === br2){
        br2 = (br1 + 1) % 8;
      }

      // stavljanje slika
      document.write("<img src='images/reklama"+br1+".png' id='sl1'/>");
      document.write("<img src='images/reklama"+br2+".png' id='sl2'/>");

      </script>
	  <br>
	 
      </div>

</section>

  <div class="footer">
   
    <p>RWA 20/21 | Miličević, Šubarić, Zubčić-Đurđević </p>
	<!-- <form action="odjava.php" method = "post">
   
    <input type="submit" class = "button" name="odjava" value="odjava" onclick="odjava()" />
    
	</form>
	< ?php include('odjava.php'); ?> -->
  </div>

</body>
</html>