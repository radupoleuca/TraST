<?php include('server.php') ?>
<?php include ('db_connect.php') ?>
<?php include('return_user_id.php') ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="semne-rutiere.css">
		<link rel="stylesheet" type="text/css" href="header.css">
		
        <title>
            TraST
        </title>
    </head>
    <body>
        <header>
			<?php include('header.php') ?>
        </header>  

        <div id="categorii">
            <div class="flex-container">

                <div class="box">
                    <a href="avertizare.php" target="_self"> <img src="imagini/p2.png" class="img-box" alt="Imagine"></a>
                    <div class="title-box"><a href="avertizare.php" target="_self"><span class="txt">INDICATOARE DE AVERTIZARE</span></a></div>
                    <div class="progress-bar"><div class="bar" id="bar1"><p>
								<?php   if(isset($_SESSION['email'])){
											$id = return_id();
											$sql = "SELECT progres_avertizare FROM users_progress WHERE user_id='$id'";
											$result = mysqli_query($conn, $sql); 
											$count  = mysqli_num_rows($result); 
											if ($count != "0"){
											$row = $result->fetch_assoc();
											$rezultat = $row['progres_avertizare'];
											if($rezultat == 100)
												echo "Capitol parcurs";
											else 
												echo "Intra si invata"; 
											
											if($rezultat == 100):?>
											<style> #bar1{ background-color: green; } </style>
											<?php  endif;} else echo "Intra si invata";}
											else
												echo "Intra si invata";?></p>
											</div>
					</div>
                </div>

                <div class="box">
                    <a href="prioritate.php" target="_self"> <img src="imagini/p3.png" class="img-box" alt="Imagine"></a>
                    <div class="title-box"><a href="prioritate.php" target="_self"><span class="txt">INDICATOARE DE PRIORITATE</span></a></div>
                    <div class="progress-bar"><div class="bar" id="bar2"><p> 
											<?php   if(isset($_SESSION['email'])){
											$id = return_id();
											$sql = "SELECT progres_prioritate FROM users_progress WHERE user_id='$id'";
											$result = mysqli_query($conn, $sql); 
											$count  = mysqli_num_rows($result); 
											if ($count != "0"){
											$row = $result->fetch_assoc();
											$rezultat = $row['progres_prioritate'];
											if($rezultat == 100) echo "Capitol parcurs"; else echo "Intra si invata";
											if($rezultat == 100):?>
											<style> #bar2{ background-color: green; } </style>
											<?php endif; } else echo "Intra si invata";}
											else
												echo "Intra si invata";?></p> </div></div>
                </div>

                <div class="box">
                    <a href="interzicere_restrictie.php" target="_self"> <img src="imagini/p4.png" class="img-box" alt="Imagine"></a>
                    <div class="title-box"><a href="interzicere_restrictie.php" target="_self"><span class="txt">INDICATOARE DE INTERZICERE SI RESTRICTIE</span></a></div>
                    <div class="progress-bar"><div class="bar" id="bar3"><p> <?php   if(isset($_SESSION['email'])){
											$id = return_id();
											$sql = "SELECT progres_interzicere FROM users_progress WHERE user_id='$id'";
											$result = mysqli_query($conn, $sql); 
											$count  = mysqli_num_rows($result); 
											if ($count != "0"){
											$row = $result->fetch_assoc();
											$rezultat = $row['progres_interzicere'];
											if($rezultat == 100) echo "Capitol parcurs"; else echo "Intra si invata";
											if($rezultat == 100):?>
											<style> #bar3{ background-color: green; } </style>
											<?php endif; }else echo "Intra si invata";}
											else
												echo "Intra si invata";?></p> </div></div>
                </div>

                <div class="box">
                    <a href="temporare.php" target="_self"> <img src="imagini/p1.png" class="img-box" alt="Imagine"></a>
                    <div class="title-box"><a href="temporare.php" target="_self"><span class="txt">INDICATOARE TEMPORARE </span></a></div>
                    <div class="progress-bar"><div class="bar" id="bar4"><p><?php   if(isset($_SESSION['email'])){
											$id = return_id();
											$sql = "SELECT progres_temporare FROM users_progress WHERE user_id='$id'";
											$result = mysqli_query($conn, $sql); 
											$count  = mysqli_num_rows($result); 
											if ($count != "0"){
											$row = $result->fetch_assoc();
											$rezultat = $row['progres_temporare'];
											if($rezultat == 100) echo "Capitol parcurs"; else echo "Intra si invata";
											if($rezultat == 100):?>
											<style> #bar4{ background-color: green; } </style>
											<?php endif; }else echo "Intra si invata";}
											else
												echo "Intra si invata";?></p></div></div>
                </div>

                <div class="box">   
                    <a href="orientare.php" target="_self"> <img src="imagini/p5.png" class="img-box" alt="Imagine"></a>
                    <div class="title-box"><a href="orientare.php" target="_self"><span class="txt">INDICATOARE DE ORIENTARE</span></a></div>
                    <div class="progress-bar"><div class="bar" id="bar5"><p><?php   if(isset($_SESSION['email'])){
											$id = return_id();
											$sql = "SELECT progres_orientare FROM users_progress WHERE user_id='$id'";
											$result = mysqli_query($conn, $sql); 
											$count  = mysqli_num_rows($result); 
											if ($count != "0"){
											$row = $result->fetch_assoc();
											$rezultat = $row['progres_orientare'];
											if($rezultat == 100) echo "Capitol parcurs"; else echo "Intra si invata";
											if($rezultat == 100):?>
											<style> #bar5{ background-color: green; } </style>
											<?php endif; }else echo "Intra si invata";}
											else
												echo "Intra si invata";?></p></div></div>
                </div>

                <div class="box">   
                    <a href="obligare.php" target="_self"> <img src="imagini/p6.png" class="img-box" alt="Imagine"></a>
                    <div class="title-box"><a href="obligare.php" target="_self"><span class="txt">INDICATOARE DE OBLIGARE</span></a></div>
                    <div class="progress-bar"><div class="bar" id="bar6"><p><?php   if(isset($_SESSION['email'])){
											$id = return_id();
											$sql = "SELECT progres_obligare FROM users_progress WHERE user_id='$id'";
											$result = mysqli_query($conn, $sql); 
											$count  = mysqli_num_rows($result); 
											if ($count != "0"){
											$row = $result->fetch_assoc();
											$rezultat = $row['progres_obligare'];
											if($rezultat == 100) echo "Capitol parcurs"; else echo "Intra si invata";
											if($rezultat == 100):?>
											<style> #bar6{ background-color: green; } </style>
											<?php endif; }else echo "Intra si invata";}
											else
												echo "Intra si invata";?></p></div></div>
                </div>

                <div class="box">
                    <a href="informare.php" target="_self"> <img src="imagini/p7.png" class="img-box" alt="Imagine"></a>
                    <div class="title-box"><a href="informare.php" target="_self"><span class="txt">INDICATOARE DE INFORMARE</span></a></div>
                    <div class="progress-bar"><div class="bar" id="bar7"><p> <?php   if(isset($_SESSION['email'])){
											$id = return_id();
											$sql = "SELECT progres_informare FROM users_progress WHERE user_id='$id'";
											$result = mysqli_query($conn, $sql); 
											$count  = mysqli_num_rows($result); 
											if ($count != "0"){
											$row = $result->fetch_assoc();
											$rezultat = $row['progres_informare'];
											if($rezultat == 100) echo "Capitol parcurs"; else echo "Intra si invata";
											if($rezultat == 100):?>
											<style> #bar7{ background-color: green; } </style>
											<?php endif; }else echo "Intra si invata";}
											else
												echo "Intra si invata";?></p></div></div>
                </div>

                <div class="box">
                    <a href="aditionale.php" target="_self"> <img src="imagini/p8.png" class="img-box" alt="Imagine"></a>
                    <div class="title-box"><a href="aditionale.php" target="_self"><span class="txt">PANOURI ADITIONALE</span></a></div>
                    <div class="progress-bar"><div class="bar" id="bar8"><p> <?php   if(isset($_SESSION['email'])){
											$id = return_id();
											$sql = "SELECT progres_aditionale FROM users_progress WHERE user_id='$id'";
											$result = mysqli_query($conn, $sql); 
											$count  = mysqli_num_rows($result); 
											if ($count != "0"){
											$row = $result->fetch_assoc();
											$rezultat = $row['progres_aditionale'];
											if($rezultat == 100) echo "Capitol parcurs"; else echo "Intra si invata";
											if($rezultat == 100):?>
											<style> #bar8{ background-color: green; } </style>
											<?php endif; }else echo "Intra si invata";}
											else
												echo "Intra si invata";?></p></div></div>
                </div>


            </div>
		</div>
        
    </body>
</html>