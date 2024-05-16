<?php include('sessionstart.php'); ?>
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
        
          
        <title>ARCADE | O nama</title>
        <link rel="stylesheet" href="style-about.css">

        <!--ikonica koja se pojavljuje zajedno s naslovom-->
        <link rel="shortcut icon" href="images/icon.ico" />
      
        <!--ipak nećemo jquery(?)>
        <script src="jquery-3.5.1.min.js"></script-->
      </head>


<body>

    <!--treba se riješiti proširenja s desne strane-->

    <!--navigcija: interaktivni hamburger meni-->
    <nav>
        <div id="menuToggle">
                <!--checkbox se ponaša kao click reciever
                ne treba nam stvarno checkbox nego :checked svojstvo-->
            <input type="checkbox" />
                
                <!--spanovi = "kriške" hamburgera-->
            <span></span>
            <span></span>
            <span></span>
                
                <!--UL koja je meni s linkovima, aktiviran klikom.-->
            <ul id="menu">
                <a href="main.php"><li>Naslovna</li></a>
                <a href="krizickruzic.php"><li>Križić - kružić</li></a>
                <a href="memory.php"><li>Memory</li></a>
                <a href="hangman.php"><li>Vješala</li></a>
				<a href="odjava.php"><li>Odjavi se</li></a>
            </ul>
          </div> 
    </nav>

    <!--glavni naslov,
        za koji želim da bude preko slike-->
        <div class="glavni-naslov">
            <h1>ARCADE</h1>
        </div>
    <!---->


    <!--
        div za pozadinsku sliku
        može li i bez ovoga??
    -->
    <!--div class="bgimg"></div-->

    <!--
        kratki tekst koji se pojavljuje ispod slike
        sastoji se od većeg i manjeg teksta
    -->
    <div class="bottomleft">
        <p id="bl-bigger">ARCADE je kuća najboljih igara.  
            Ne dajte da vas <b>retro</b> imidž zavara, naša igraonica ne zaostaje za modernim vremenima. 
            Zato vam dajemo ovaj <i>web site</i>, da se zaigrate i na vlastitom računalu.</p>
        <p id="bl-smaller">To, naravno, ne znači da nam ne trebate dolaziti u posjet! 
            Lorem ipsum dolor sit amet, consenectur.
            I dalje nas možete naći na već poznatoj adresi:
            <!--
                adresu pišemo kao listu s nevidljivim bulletima
                jer ju tako najlakše istaknemo
            -->
            <ul id="address">
                <li>Ulica tog i tog 35</li>
                <li>51 000, Rijeka</li>
                <li>Hrvatska</li>
            </ul>
        </p>
		
    </div>
    

    <div class="footer">
        <p>RWA 20/21 | Miličević, Šubarić, Zubčić-Đurđević</p>
    </div>

</body>
</html>

