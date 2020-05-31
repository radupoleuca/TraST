<?php
include('server.php');   
$nrInteratii=1;
$verificare=array();
$confirmare="false";
$pentruA="";
while($confirmare=="false"){
    $index=rand(1,37);
    $cautare=array_search($index,$verificare);
    if(!$cautare){
        $confirmare="true";
    }
}

$sql_int="SELECT intrebare,raspunsa,raspunsb,raspunsc,corect FROM intrebari WHERE id=$index";
    if($result=mysqli_query($db,$sql_int)){
        $row=$result->fetch_assoc();
        $intrebare=$row['intrebare'];
        $raspunsa=$row['raspunsa'];
        $raspunsb=$row['raspunsb'];
        $raspunsc=$row['raspunsc'];
        $raspunsCorect=$row['corect'];
    }
 if(isset($_POST['trimite'])){
        print_r($verificare);
        header("location:chestionare.php");
     }  
  if(isset($_POST['verifica'])){

  }     



?>