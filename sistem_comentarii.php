<?php
 include "server.php";
  function insert_comment($coloana, $db){
   if(isset($_POST['trimite'])){
    $date = date('Y-m-d H:i:s');
    if(isset($_SESSION['email'])){
      $email=$_SESSION['email'];
      $interogare="SELECT nume, prenume,id FROM utilizatori WHERE email='$email'";
      if($rezultat= mysqli_query($db, $interogare)){
        $row = $rezultat->fetch_assoc();
        $nume = $row['nume'];
        $prenume=$row['prenume'];
        $id=$row['id'];
    } 
  }
   else{
    $nume="Anonimul";
    $prenume="";
    $id=0;
   } 
    
    $comentariu = mysqli_real_escape_string($db, $_POST['comentariu']);
    $comentariu_len=strlen($comentariu);
    $sql="INSERT INTO comments (user_id,id,nume,prenume,$coloana, data_trimitere) VALUES ('$id','','$nume','$prenume', '$comentariu', '$date')";
    if($comentariu_len>500){
       echo "Ati introdus prea multe caractere!!!!";
    }
    else{
        mysqli_query($db,$sql);
    }
  }
  }
    
    
  function post_comment($coloana, $db){
    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql="SELECT nume,prenume,$coloana, data_trimitere FROM comments";
    if($result=mysqli_query($db,$sql)){
      while($row = $result->fetch_assoc())
      {   
          if($row[$coloana]){
           echo "<div class = mesaj_box><p>";
           $comment_n=$row['nume'];
           $comment_p=$row['prenume'];
           $comment=$row[$coloana];
           $data=$row['data_trimitere'];
           echo( "$comment_n $comment_p: $comment<p> <br> $data");
         echo "</p></div>";
          }
     }
  
   }
}


?>