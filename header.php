<?php include ('db_connect.php') ?>
<div id="logo"><img src="imagini/logooo.png" id="imagine-logo" alt="Imagine"></div>

<div class="topnav" id="myTopnav">  
      <?php if(isset($_SESSION['email']) && $_SESSION['email'] == "raducupoleuca@yahoo.com"): ?>
        <a href="admin.php" >Admin</a>
      <?php endif; ?>
      <a href="index.php" >Acasa</a>
      <a href="#"><span style="cursor:pointer" onclick="openNav()">DESPRE</span></a>
      <a href="contact.php">Contact</a>
       
       
           <?php if(isset($_SESSION['email'])): ?>
               <?php include('online_users.php') ?>
               <a href="logout.php">DECONECTARE</a>
           <?php else: ?>
               <?php 
               $ses = session_id();
               $sql4    = "DELETE FROM users_status WHERE session='$ses'"; 
               $result4 = mysqli_query($conn, $sql4); ?>
               <a href="login.php">AUTENTIFICARE</a>
           <?php endif; ?>
      
           <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i> </a>     
</div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

<div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">
        <a href="ghid_utilizare.html">Ghid de utilizare-TraST</a>
        <a href="raport_frontend-backend.html">Raport-TraST</a>
        <a href="diagrame.html">Diagrama</a>
    </div>
</div>

<script>
function openNav() {
  document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.height = "0%";
}
</script>


