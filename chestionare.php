<?php include('server.php') ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="chestionare.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            Chestionare
        </title>
    </head> 
    <body>
        <header>
              <?php include('header.php') ?>
        </header> 

        <section class="titlu">
            <h1>Chestionare</h1>
        </section>

        <section class="corp-chestionar">

            <div class="mini-container">
                <h3>Intrebarea 1/5</h3>
            </div>

            <div class="mini-container">
                
                    <img src="avertizare/2.png" class="imagine" >
                    <p class="paragraf">Ce fel de indicator este acesta? (In ce categorie se incadreaza?) </p>

            </div>

            <div class="mini-container">
                
                <div class="raspuns">
                    <input class="buton-raspuns" type="button" value="A" >
                    Indicator de avertizare
                </div>

                <div class="raspuns">
                    <input class="buton-raspuns" type="button" value="B">
                    Indicator de obligare
                </div>

                <div class="raspuns">
                    <input class="buton-raspuns" type="button" value="C">
                    Indicator de interzicere
                </div>
                
            </div>

            <div class="mini-container">

                <div class="optiune">
                    <input class="buton-optiune" type="button" value="Raspunde mai tarziu" >
                </div>

                <div class="optiune">
                    <input class="buton-optiune" type="button" value="Sterge raspuns">
                </div>

                <div class="optiune">
                    <input class="buton-optiune" type="button" value="Trimite raspuns">
                </div>
                
            </div>
            
        </section>

    </body>
</html>
