<?php
include 'server.php'; 
    $sql_select="SELECT intrebare,raspunsa,raspunsb,raspunsc,corect FROM intrebari WHERE id=2";
    if($result=mysqli_query($db,$sql_select)){
         $row=$result->fetch_assoc();
         $intrebare=$row['intrebare'];
         $raspunsa=$row['raspunsa'];
         $raspunsb=$row['raspunsb'];
         $raspunsc=$row['raspunsc'];
         $raspunsCorect=$row['corect'];
    } 
    echo "$intrebare";
?>
