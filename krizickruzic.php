<?php  include('sessionstart.php'); ?>
<html>

  <head>
  <!--fontovi koje koristimo-->
  <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">

  <!--UTF-8 zbog hrvatskih znakova-->
  <meta charset="UTF-8">

  <!--postavljanje atributa za praćenje veličine ekrana-->
  <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    
  <title>Križić-kružić</title>
  <link rel="stylesheet" href="stylegame.css">
    
    <!--ikonica koja se pojavljuje zajedno s naslovom-->
    <link rel="shortcut icon" href="images/icon.ico" />

    <!--jquery ipak ne(?)>
    <script src="jquery-3.5.1.min.js"></script-->
</head>


<body>

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
        <li><a href="hangman.php">Vješala</a></li> 
		<li><a href="odjava.php">Odjavi se</a></li> 
		<!-- <form action = "https://www.youtube.com/watch?v=5SdW0_wTX5c" action = "post">
		<input type = "submit" value = "KAKO IGRATI?" class = "yt"/>
		</form> -->
   
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
          <a href="hangman.php">Vješala</a> 
		  <a href="odjava.php">Odjavi se</a>
		  <form action = "https://www.youtube.com/watch?v=5SdW0_wTX5c" action = "post">
		<input type = "submit" value = "KAKO IGRATI?" class = "yt"/>
		</form>
        </div>
      </div> 

  
  </nav>


    <!--main sekcija je ovo što nam nije sa strana-->
<section id="main">
  
  <!--veliki naslov-->
  <div>
    <h1 class="glavni">arcade</h1>
  </div>


  <!--div za igru-->
  <div class="game">
        <!--naslov igre-->
        <h1 class="game--title">KRIŽIĆ-KRUŽIĆ</h1>

        <!--container "kutija" za igru-->
        <div class="game--container">
            <!--
              igra se zapravo sastoji od 9 indeksiranih ćelija
              ti indeksi služit će nam u scriptu, za igranje
            -->
            <div data-cell-index="0" class="cell"></div>
            <div data-cell-index="1" class="cell"></div>
            <div data-cell-index="2" class="cell"></div>
            <div data-cell-index="3" class="cell"></div>
            <div data-cell-index="4" class="cell"></div>
            <div data-cell-index="5" class="cell"></div>
            <div data-cell-index="6" class="cell"></div>
            <div data-cell-index="7" class="cell"></div>
            <div data-cell-index="8" class="cell"></div>
        </div>

        <!--
          tko je na redu, tko je pobijedio i te poruke
          sadržaj se unosi scriptom-->
        <h2 class="game--status"></h2>

        <!--dugme za restart igre-->
        <button class="game--restart">
          <!--ikonica strelice (sa transform svojstvom!)-->
          <img class="icon" src="images/reload.png">
          Ponovo pokreni
        </button>

        <!--konačno, sam js od igrice-->
        <script src="krkr.js"></script>
    
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
      </div>

</section>


<!---U IZRADI!!!
  <div class="mobile" id="mobile" onload="pisi()"></div>
      
    <script type="text/javascript">
      var i = 0;
      var txt = 'posjetite nas';
      var speed = 100;

      function pisi(){
        if(i < txt.length){
          alert("pisem!");
          document.getElementById("mobile").innerHTML += txt.charAt(i);
          i++;
          setTimeout(pisi, speed);
        }
      }
    </script--->


  <div class="footer">
    <!---img src="images/posjetite_najsira.gif" id="mobile"/--->
    <p>RWA 20/21 | Miličević, Šubarić, Zubčić-Đurđević</p>
	<!-- <form action="odjava.php" method = "post">
   
    <input type="submit" class = "button" name="odjava" value="odjava" onclick="odjava()" />
    
	</form>
	< ?php include('odjava.php'); ?> -->
	
	
  </div>

</body>
</html>
