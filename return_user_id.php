<?php 

function return_id(){
        include('db_connect.php');
        
	    $email = $_SESSION['email'];
         $sql = "SELECT id FROM utilizatori WHERE email='$email'";
		$id_result = mysqli_query($conn, $sql); 
		$row = $id_result->fetch_assoc();
        $rezultat1 = $row['id'];

        return $rezultat1;
        
}
?>