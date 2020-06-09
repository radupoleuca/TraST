<?php include ('db_connect.php') ?>
<?php include('server.php') ?>
<?php include('return_user_id.php') ?>
<?php include('progress_bar.php')?>
<?php include('utilizatori_inregistrati_si_online.php')?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="index.css">
        <link rel="stylesheet" type="text/css" href="header.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>
            TraST
        </title>
    </head>
    <body>

        <header>
            <?php include('header.php') ?>
        </header> 

        <div id="container">

            <div class="prezentare">
            

                <div class="mySlides fade">
                    <div class="titlu">Traffic Signs Tutor</div>
                    <img src="imagini/driving1.jpg" alt="Imagine">
                </div>

                <div class="mySlides fade">
                    <div class="titlu">Traffic Signs Tutor</div>
                    <img src="imagini/driving6.jpg" alt="Imagine">
                </div>

                <div class="mySlides fade">
                    <div class="titlu">Traffic Signs Tutor</div>
                    <img src="imagini/driving3.jpg" alt="Imagine">
                </div>

                <div class="mySlides fade">
                    <div class="titlu">Traffic Signs Tutor</div>
                    <img src="imagini/driving2.jpg" alt="Imagine">
                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

            </div>

            <div class="dots" >
                <span class="dot" onclick="currentSlide(1)"></span> 
                <span class="dot" onclick="currentSlide(2)"></span> 
                <span class="dot" onclick="currentSlide(3)"></span> 
                <span class="dot" onclick="currentSlide(4)"></span> 
            </div>

        

            <hr>
            <h1 class="titlu-mediu">MEDIU DE INVATARE</h1>
            <hr>
            <div class="mediu">
                <div class="box">
                    <div class="title-box"><a href="semne-rutiere.php" target="_self">SEMNE RUTIERE</a></div>
                    <a href="semne-rutiere.php" target="_self"> <img src="imagini/semn.jpg" class="img-box" alt="Imagine"></a>
                    <form method="POST" action="butoane_reset.php"><div class="buton-reset"><input type="submit" id="btn-reset-1" name="buton1" value="Reset progres"></div></form>
                </div>
                <div class="box">
                    <div class="title-box"><a href="codul_rutier_bun.php" target="_self">CODUL RUTIER</a></div>
                    <a href="codul_rutier_bun.php" target="_self"><img src="imagini/traffic.gif" class="img-box" alt="Imagine"></a>
                    <form method="POST" action="butoane_reset.php"><div class="buton-reset"><input type="submit" id="btn-reset-2" name="buton2" value="Reset progres"></div></form>
                </div>
                <div class="box">
                    <div class="title-box"><a href="chestionare.php" target="_self">CHESTIONAR</a></div>
                    <a href="chestionare.php" target="_self"><img src="imagini/pri3.jpg" class="img-box" alt="Imagine"></a>
                    <form method="POST" action="butoane_reset.php"><div class="buton-reset"><input type="submit" id="btn-reset-3" name="buton3" value="Reset progres"></div></form>
                </div>
            </div>

            <div class="progress-bar">
                <div class="bar"> 
                    <?php
                    if(isset($_SESSION['email']))
                    {
                    $id = return_id();
                    }
                    else{
                    $id=0;
                    }
                    progres_total($id,$conn);
                    ?>
                </div>

            </div>

            <div id="about">
                <h2>DESPRE SITE</h2>
                <p> TraST (Traffic signs tutor) este o pagina web menita pentru a ajuta orice persoana care doreste sa invete semnele rutiere. Aplicatia este una usor de folosit, intuitiva si interactiva. Parcurgand paginile progresul vostru va fi inregistrat si stocat in baza de date iar la final pentru a avea un progres de 100% va trebui sa parcurgeti un chestionar teoretic cu 37 de intrebari. Este necesar sa parcurgeti cat mai mult daca doriti sa ajungeti in clasament. Site-ul se bazeaza pe o interfata calda si usor de inteles iar site-ul are un scop educativ. In final TraSt este o pagina web care imbina utilul cu placutul. Are o interfata placuta utilizatorilor si usor de accesat. TraST doreste sa fie o pagina web de folos persoanelor care urmeaza o scoala de soferi dar totodata este un tutorial ce poate fi urmat de oricine este dornic de a invata lucruri interesante despre semnele rutiere.</p>
            </div>

            <div class="contor">
                <table class="tbl">
                    <tr>
                        <td> 
                            <?php  
                            utilizatori_online($conn);
                            ?>
                        </td>
                            
                        <td rowspan="2"><a href="clasament.php">Clasament</a></td>
                        <td>
                            <?php 
                            utilizatori_inregistrati($conn);
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Utilizatori online</td>
                   
                        <td>Utilizatori inregistrati</td>
                    </tr>
                </table>
            </div>
        </div>
            <script src="index.js"></script>

    



<?php
progres_semne_and_cdRutier($id,$conn);
?>
</body>
</html>





