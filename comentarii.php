<?php
    include('server.php');
    $db = mysqli_connect("127.0.0.1","root","","trastdb");

    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }
 if(isset($_POST['trimite'])){
    $nume = $_SESSION['nume'];
    $prenume=$_SESSION['prenume'];
    $comentariu = mysqli_real_escape_string($db, $_POST['comentariu']);
    $comentariu_len=strlen($comentariu);
    $sql="INSERT INTO comments (id,nume,prenume, comm) VALUES ('','$nume','$prenume', '$comentariu')";
    if($comentariu_len>500){
       header("location: test.php?error=1");
    }
    else{
        mysqli_query($db,$sql);
        header("location: avertizare.php");
    }
 
}  

?>