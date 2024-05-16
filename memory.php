<?php include('sessionstart.php'); ?>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Memory</title>

    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap"
          rel="stylesheet" />

    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
          crossorigin="anonymous" />

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
            crossorigin="anonymous"></script>

    <link rel="stylesheet" href="styles.css" />

    <!--ikonica koja se pojavljuje zajedno s naslovom-->
    <link rel="shortcut icon" href="images/icon.ico" />
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
        <li><a href="krizickruzic.php">Križić-kružić</a></li> 
        <li><a href="hangman.php">Vješala</a></li> 
		<li><a href="odjava.php">Odjavi se</a></li> 
		<form action = "https://youtu.be/oFfYmrGeTPs" action = "post">
		<input type = "submit" value = "KAKO IGRATI?" class = "yt"/>
		</form>
		
		
   
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
          <a href="krizickruzic.php">Križić-kružić</a> 
          <a href="hangman.php">Vješala</a> 
		  <a href="odjava.php">Odjavi se</a> 
		 <form action = "https://youtu.be/oFfYmrGeTPs" action = "post">
		<input type = "submit" value = "KAKO IGRATI?" class = "yt"/>
		</form> 
		  
        </div>
      </div> 

  
  </nav>

  <section id="main">
	
    <section id="game">
    <header>
        <!--h1 class="text-center mt-4 mb-2 headTag">MEMORY</h1--->
        <h1 class="glavni">arcade</h1>
    </header>

    <section class="container mx-auto">
        <section class="mx-auto">
            <div class="row">
                <div class="col-12 text-center points">
                    <p>Bodovi: <span id="point"> 0</span></p>
                </div>
            </div>

            <div id="won" class="text-center">
                <h1>Bravo, otkrio si sva skrivena umjetnička djela!</h1>
                <p>Osvojio si: <span id="finalPoints">0</span></p>
                <button class="btn" id="playAgain">Ponovi</button>
            </div>

            <section class="memory-game">
                <div class="memory-card" data-cards="card1">
                    <img class="front-face" src="Slike/monalisa.png" alt="monalisa" />
                    <img class="back-face" src="Slike/pozadina.png" alt="pozadina" />
                </div>
                <div class="memory-card" data-cards="card1">
                    <img class="front-face" src="Slike/monalisa.png" alt="monalisa" />
                    <img class="back-face" src="Slike/pozadina.png" alt="pozadina" />
                </div>

                <div class="memory-card" data-cards="card2">
                    <img class="front-face" src="Slike/mjesecina.png" alt="mjesecina" />
                    <img class="back-face" src="Slike/pozadina.png" alt="pozadina" />
                </div>
                <div class="memory-card" data-cards="card2">
                    <img class="front-face" src="Slike/mjesecina.png" alt="mjesecina" />
                    <img class="back-face" src="Slike/pozadina.png" alt="pozadina" />
                </div>

                <div class="memory-card" data-cards="card3">
                    <img class="front-face" src="Slike/vrisak.png" alt="vrisak" />
                    <img class="back-face" src="Slike/pozadina.png" alt="pozadina" />
                </div>
                <div class="memory-card" data-cards="card3">
                    <img class="front-face" src="Slike/vrisak.png" alt="vrisak" />
                    <img class="back-face" src="Slike/pozadina.png" alt="pozadina" />
                </div>

                <div class="memory-card" data-cards="card4">
                    <img class="front-face" src="Slike/vaza.png" alt="vaza" />
                    <img class="back-face" src="Slike/pozadina.png" alt="pozadina" />
                </div>
                <div class="memory-card" data-cards="card4">
                    <img class="front-face" src="Slike/vaza.png" alt="vaza" />
                    <img class="back-face" src="Slike/pozadina.png" alt="pozadina" />
                </div>

                <div class="memory-card" data-cards="card5">
                    <img class="front-face" src="Slike/salvador.png" alt="salvador" />
                    <img class="back-face" src="Slike/pozadina.png" alt="pozadina" />
                </div>
                <div class="memory-card" data-cards="card5">
                    <img class="front-face" src="Slike/salvador.png" alt="salvador" />
                    <img class="back-face" src="Slike/pozadina.png" alt="pozadina" />
                </div>

                <div class="memory-card" data-cards="card6">
                    <img class="front-face" src="Slike/gogh.png" alt="gogh" />
                    <img class="back-face" src="Slike/pozadina.png" alt="pozadina" />
                </div>
                <div class="memory-card" data-cards="card6">
                    <img class="front-face" src="Slike/gogh.png" alt="gogh" />
                    <img class="back-face" src="Slike/pozadina.png" alt="pozadina" />
                </div>
            </section>
        </section>
    </section>

    <script src="script.js"></script>



    <!--
        tablica koja služi kao leaderboard
    --> 
	<!--
    <table id="rankings" class="leaderboard">
-->
        <!--head tablice sadrži imena stupaca-->
		<!--
        <thead id="prvi">
            <tr>
                <th>Mjesto</th>
                <th>Igrač</th>
                <th>Bodovi</th>
            </tr>
        </thead>   -->

        <!--u body tablice povlače se podaci o najboljim igračima-->
		<!--
        <tbody>
            <tr>
                <td>1.</td>
                <td>neki get name</td>
                <td>get</td>
            </tr>

            <tr>
                <td>2.</td>
                <td>-----</td>
                <td>---</td>
            </tr>

            <tr>
                <td>3.</td>
                <td>-----</td>
                <td>---</td>
            </tr>

            <tr>
                <td>4.</td>
                <td>-----</td>
                <td>---</td>
            </tr>

            <tr>
                <td>5.</td>
                <td>-----</td>
                <td>---</td>
            </tr>
        </tbody> 
    </table> -->


<!--
<iframe width="560" height="315" src="https://www.youtube.com/embed/oFfYmrGeTPs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  --> 
  
  
  
		</section>

</section>


    <div class="footer">
        
        <p>RWA 20/21 | Miličević, Šubarić, Zubčić-Đurđević</p>
		<!-- <form action="odjava.php" method = "post">
   
		<input type="submit" class = "button" name="odjava" value="odjava" onclick="odjava()" />
    
		</form>
		< ?php include('odjava.php'); ?> -->
    </div>


</body>
</html>
