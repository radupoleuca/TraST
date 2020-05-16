<?php include('server.php') ?>
<?php include ('db_connect.php') ?>
<?php include('return_user_id.php') ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="codul-rutier.css">
        <link rel="stylesheet" type="text/css" href="antet.css">
        <title>
            TraST
        </title>
    </head> 
    <body>
        <header>
             <div id="logo"><img src="imagini/logooo.png"></div>
             <nav class="meniu">  
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="index.php#about">ABOUT</a></li>
                    <li class="dropdown"><a href="javascript:void(0)" class="dropbtn">COUNTRY</a>
                        <div class="dropdown-content">
                            <a href="#"><img src="imagini/rom1.png" class="miniimg">ROMANIA</a>
                            <a href="#"><img src="imagini/sua1.png" class="miniimg">SUA</a>
                        </div>
                    </li>
					<li><a href="#contact.html">Contact</a></li>
                      <li>
                        <?php if(isset($_SESSION['email'])): ?>
                            <a href="logout.php">Logout</a>
                        <?php else: ?>
                            <a href="login.php">Login</a>
                        <?php endif; ?>
                    </li>
                  </ul>    
             </nav>
        </header>  
       
        <div id="container">
        <script type="text/javascript" src="img_visibility_cod.js"></script>

            <section id="partea-stanga">
                <div class="titlu-partea-stanga">
                    <h1>CODUL RUTIER</h1>
                </div>

                <div class="lista">
                    <ol>
                        <li class="lst"><a href="#" onclick="load_dispozitii()">Dispozitii generale</a> <img id="im1" src="imagini/verif.png"></li>
                        <li class="lst"><a href="#" onclick="load_vehiculele()">Vehiculele</a><img id="im2" src="imagini/verif.png"></li>
                        <li class="lst"><a href="#" onclick="load_conducatorii()">Conducatorii de vehicule</a><img id="im3" src="imagini/verif.png"></li>
                        <li class="lst"><a href="#" onclick="load_semnalizarea()">Semnalizarea rutiera</a><img id="im4" src="imagini/verif.png"></li>
                        <li class="lst"><a href="#" onclick="load_reguli()">Reguli de circulatie</a><img id="im5" src="imagini/verif.png"></li>
                        <li class="lst"><a href="#" onclick="load_infractiuni()">Infractiuni si pedepse</a><img id="im6" src="imagini/verif.png"></li>
                        <li class="lst"><a href="#" onclick="load_raspunderea()">Raspunderea <br> contraventionala</a><img id="im7" src="imagini/verif.png"></li>
                        <li class="lst"><a href="#" onclick="load_cai()">Cai de atac impotriva <br>procesului verbal</a><img id="im8" src="imagini/verif.png"></li>
                        <li class="lst"><a href="#" onclick="load_atributii()">Atributii ale unor ministere si ale  altor autoritati</a><img id="im9" src="imagini/verif.png"></li> 
                        <li class="lst"><a href="#" onclick="load_dfinale()">Dispozitii finale si anexa</a><img id="im10" src="imagini/verif.png"></li>
                    </ol>
                </div>
                

            </section>

            <section id="partea-dreapta">
    
                        <div id ="pg1"> 
                            <script>
                                function load_dispozitii() {
                                    document.getElementById("pg1").innerHTML='<object width=100% height=610 type="text/html" data="dispozitii_generale.html" ></object>';
                                }
                            </script>
                        </div>

                        <div id ="pg2"> 
                            <script>
                                function load_vehiculele() {
                                    document.getElementById("pg1").innerHTML='<object width=100% height=610 type="text/html" data="vehiculele.html" ></object>';
                                }
                            </script>
                        </div>

                            
                        <div id ="pg3"> 
                            <script>
                                function load_conducatorii() {
                                    document.getElementById("pg1").innerHTML='<object width=100% height=610 type="text/html" data="conducatorii.html" ></object>';
                                }
                            </script>
                        </div>

                        <div id ="pg4"> 
                            <script>
                                function load_semnalizarea() {
                                    document.getElementById("pg1").innerHTML='<object width=100% height=610 type="text/html" data="semnalizarea.html" ></object>';
                                }
                            </script>
                        </div>

                        <div id ="pg5"> 
                            <script>
                                function load_reguli() {
                                    document.getElementById("pg1").innerHTML='<object width=100% height=610 type="text/html" data="reguli.html" ></object>';
                                }
                            </script>
                        </div>

                            
                        <div id ="pg6"> 
                            <script>
                                function load_infractiuni() {
                                    document.getElementById("pg1").innerHTML='<object width=100% height=610 type="text/html" data="infractiuni.html" ></object>';
                                }
                            </script>
                        </div>
                        
                        <div id ="pg7"> 
                            <script>
                                function load_raspunderea() {
                                    document.getElementById("pg1").innerHTML='<object width=100% height=610 type="text/html" data="raspunderea.html" ></object>';
                                }
                            </script>
                        </div>

                        <div id ="pg8"> 
                            <script>
                                function load_cai() {
                                    document.getElementById("pg1").innerHTML='<object width=100% height=610 type="text/html" data="cai_de_atac.html" ></object>';
                                }
                            </script>
                        </div>

                            
                        <div id ="pg9"> 
                            <script>
                                function load_atributii() {
                                    document.getElementById("pg1").innerHTML='<object width=100% height=610 type="text/html" data="atributii.html" ></object>';
                                }
                            </script>
                        </div>
                        <div id ="pg10"> 
                            <script>
                                function load_dfinale() {
                                    document.getElementById("pg1").innerHTML='<object width=100% height=610 type="text/html" data="dispozitii_finale.html" ></object>';
                                }
                            </script>
                        </div>
            </section>

        </div>

       

    </body>
</html>


