
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
    
    <title>ARCADE | Zaigraj se s nama!</title>

    <!--CSS dokument-->
    <link rel="stylesheet" href="stylesheet.css">

    <!--ikonica koja se pojavljuje zajedno s naslovom-->
    <link rel="shortcut icon" href="images/icon.ico" />
</head>

<body>

    <!--
        banner na vrhu sa logom, navigacijom i loginom
    >
    <section class="upper-banner">
        <div class="upper-banner-img">
            <img src="images/play.gif" id="logo-image"/>
        </div>

        <div class="nav">
            <ul id="nav-list">
                <li>Link 1</li>
                <li>Link 2</li>
            </ul>
        </div>

        <div class="login-form">
            <--login>
        </div>
    </section--->

    <div class="navbar">
        <img src="images/play.gif" id="logo-image"/>

       <!-- <a href="o-nama.php">O nama</a>-->
        <a href="probni.php">Prijava</a>
        
        <!--div class="dropdown">
            <button class="dropbtn">Dropdown 
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="#">Link 1</a>
              <a href="#">Link 2</a>
              <a href="#">Link 3</a>
            </div>
          </div--> 
      </div>


    <!--div za slideshow-->
    <div class="slideshow">
        <img class="slide" src="images/carousel1.png">
        <img class="slide" src="images/carousel2.png">
        <img class="slide" src="images/carousel3.png">

        <!--
            dugmi za upravlanje slideshow-om
            ova $#... oznaka predstavlja simbol koji želim na gumbu
            klikom se aktivira funkcija koja umanjuje ili uvećava 
                redni broj slike koju želimo prikazati
        -->
        <button class="left-button" onclick="plusDivs(-1)">&#10094;</button>
        <button class="right-button" onclick="plusDivs(1)">&#10095;</button>
    </div>
      
    <!--script za slideshow-->
    <script>
      var slideIndex = 1;
      showDivs(slideIndex);
      
      function plusDivs(n){
        showDivs(slideIndex += n);
    }
      
    function showDivs(n) {
        var i; // za for petlju
        var x = document.getElementsByClassName("slide"); // polje u koje sprema naše slike

        /* osiguranja da ne izađemo iz slika
        * vraća indeks na 1 za napredovanje udesno
        * vraća ga na max indeks za napredovanje ulijevo*/
        if (n > x.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = x.length
        }

        // prvo sakrij sve slike
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";  
        }
        // zatim onu na slideIndeks-1 (jer je polje) prikaži
        x[slideIndex-1].style.display = "block";  
    }
    </script>


    <section class="games">
        <!--
            zamišljeno je da "kućice" za igre poredamo u red sa n stupaca
            svaki element u tome jedna je kućica sa slikom i pripadajućim overlayem
        -->
       <div class="row">
            <div class="column">
                <!-- 
                    slika je ujedno i link jer na malom ekranu nema overlaya
                    (pretpostavljamo da je mali ekran npr. telefon)
                -->
                <a href="krizickruzic.php">
                <img src="images/igra1.png" style="width:100%" class="image">
                </a>
                <!--
                    overlay je ono što se pojavi kad hoveramo sliku:
                    neki link sa pozadinom u boji
                    link nas vodi na danu igru
                -->
                <div class="overlay">
                    <div class="text">
                        <a href="krizickruzic.php">Križić-kružić</a>
                    </div>
                </div>
            </div>

            <div class="column">
                <a href="memory.php">
                <img src="images/memory.png" style="width:100%" class="image">
                </a>
                <div class="overlay">
                    <div class="text">
                        <a href="memory.php">Memory</a>
                    </div>
                </div>
            </div>

            <div class="column">
                <a href="hangman.php">
                <img src="images/igra3.png" style="width:100%" class="image">
                </a>
                <div class="overlay">
                    <div class="text">
                        <a href="hangman.php">Vješala</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--
        fiksno podnožje
        !!!UREDITI za mobilne
    -->
    <div class="footer">
        <!--img src="images/posjetite_najsira.gif" id="mobile"/-->
        <p>Neko podnožje blablabla RWA 2021</p>
    </div>


</body>