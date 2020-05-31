<?php include('sistem_chestionare.php') ?>

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
             <?php $interatie=1?>
            <div class="mini-container">
                <?php echo"<h3> Intrebarea $interatie/26</h3>"?>
            </div>
           
            <div class="mini-container">
                 <?php
                   if($index==1){
                    echo"<img src=avertizare/2.png class=imagine >";
                    echo "<p class=paragraf> $intrebare </p>";
                   }
                   else{
                    echo "<p class=paragraf>$intrebare </p>";
                   }
                    
                 ?>   

            </div>

            <div class="mini-container">
                
                <div class="raspuns">
                <input type="checkbox" id="A" name="A" class="buton-raspuns"  value="yes">
                   <?php echo"$raspunsa" ?>
                </div>

                <div class="raspuns">
                <input type="checkbox" id="B" name="B" class="buton-raspuns"  value="yes">
                   <?php echo"$raspunsb" ?>
                </div>

                <div class="raspuns">
                <input type="checkbox" id="C" name="C" class="buton-raspuns"  value="yes">
                  <?php echo"$raspunsc" ?>
                </div>
                
            </div>

            <div class="mini-container">
           <form action="sistem_chestionare.php" method="POST">
                <div class="optiune">
                <button name="verifica" type="submit"  class="buton_optiune">Verificare raspuns</button> 
                </div>
                <div class="optiune">
                <button name="trimite"  type="submit" class="buton_optiune">Trimite raspuns</button>
                </div>
            </form>                
            </div>
            
        </section>

    </body>
</html>
