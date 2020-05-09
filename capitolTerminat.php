<?php
    session_start();
    include('db_connect.php');
    $email = $_SESSION['email'];
    
    $sql = "SELECT id FROM utilizatori WHERE email='$email'";
    $id_result = mysqli_query($conn, $sql); 
    $row = $id_result->fetch_assoc();
    $rezultat1 = $row['id'];

    if(isset($_POST['progres-avertizare'])) {
         
		$sql2 = "SELECT progres_avertizare FROM users_progress WHERE user_id='$rezultat1'";
		$result = mysqli_query($conn, $sql2); 
		$count  = mysqli_num_rows($result); 

		if ($count == "0") { 
			$sql3    = "INSERT INTO users_progress (user_id, progres_avertizare) VALUES('$rezultat1', 100)"; 
			$result3 = mysqli_query($conn, $sql3);
		} else {
			$sql4    = "UPDATE users_progress SET progres_avertizare=100 WHERE user_id='$rezultat1'"; 
			$result4 = mysqli_query($conn, $sql4); 
		}
        
    }
    else
    if(isset($_POST['progres-informare'])) {
         
		$sql2 = "SELECT progres_informare FROM users_progress WHERE user_id='$rezultat1'";
		$result = mysqli_query($conn, $sql2); 
		$count  = mysqli_num_rows($result); 

		if ($count == "0") { 
			$sql3    = "INSERT INTO users_progress (user_id, progres_informare) VALUES('$rezultat1', 100)"; 
			$result3 = mysqli_query($conn, $sql3);
		} else {
			$sql4    = "UPDATE users_progress SET progres_informare=100 WHERE user_id='$rezultat1'"; 
			$result4 = mysqli_query($conn, $sql4); 
		}
    }
    else
    if(isset($_POST['progres-interzicere'])) {
         
		$sql2 = "SELECT progres_interzicere FROM users_progress WHERE user_id='$rezultat1'";
		$result = mysqli_query($conn, $sql2); 
		$count  = mysqli_num_rows($result); 

		if ($count == "0") { 
			$sql3    = "INSERT INTO users_progress (user_id, progres_interzicere) VALUES('$rezultat1', 100)"; 
			$result3 = mysqli_query($conn, $sql3);
		} else {
			$sql4    = "UPDATE users_progress SET progres_interzicere=100 WHERE user_id='$rezultat1'"; 
			$result4 = mysqli_query($conn, $sql4); 
		}
    }
    else
    if(isset($_POST['progres-obligare'])) {
         
		$sql2 = "SELECT progres_obligare FROM users_progress WHERE user_id='$rezultat1'";
		$result = mysqli_query($conn, $sql2); 
		$count  = mysqli_num_rows($result); 

		if ($count == "0") { 
			$sql3    = "INSERT INTO users_progress (user_id, progres_obligare) VALUES('$rezultat1', 100)"; 
			$result3 = mysqli_query($conn, $sql3);
		} else {
			$sql4    = "UPDATE users_progress SET progres_obligare=100 WHERE user_id='$rezultat1'"; 
			$result4 = mysqli_query($conn, $sql4); 
		}
    }
    else
    if(isset($_POST['progres-prioritate'])) {
         
		$sql2 = "SELECT progres_prioriate FROM users_progress WHERE user_id='$rezultat1'";
		$result = mysqli_query($conn, $sql2); 
		$count  = mysqli_num_rows($result); 

		if ($count == "0") { 
			$sql3    = "INSERT INTO users_progress (user_id, progres_aprioritate) VALUES('$rezultat1', 100)"; 
			$result3 = mysqli_query($conn, $sql3);
		} else {
			$sql4    = "UPDATE users_progress SET progres_prioritate=100 WHERE user_id='$rezultat1'"; 
			$result4 = mysqli_query($conn, $sql4); 
		}   
    }
    else
    if(isset($_POST['progres-aditionale'])) {
         
		$sql2 = "SELECT progres_aditionale FROM users_progress WHERE user_id='$rezultat1'";
		$result = mysqli_query($conn, $sql2); 
		$count  = mysqli_num_rows($result); 

		if ($count == "0") { 
			$sql3    = "INSERT INTO users_progress (user_id, progres_aditionale) VALUES('$rezultat1', 100)"; 
			$result3 = mysqli_query($conn, $sql3);
		} else {
			$sql4    = "UPDATE users_progress SET progres_aditionale=100 WHERE user_id='$rezultat1'"; 
			$result4 = mysqli_query($conn, $sql4); 
		}   
    }
    else
    if(isset($_POST['progres-temporare'])) {
         
		$sql2 = "SELECT progres_temporare FROM users_progress WHERE user_id='$rezultat1'";
		$result = mysqli_query($conn, $sql2); 
		$count  = mysqli_num_rows($result); 

		if ($count == "0") { 
			$sql3    = "INSERT INTO users_progress (user_id, progres_temporare) VALUES('$rezultat1', 100)"; 
			$result3 = mysqli_query($conn, $sql3);
		} else {
			$sql4    = "UPDATE users_progress SET progres_temporare=100 WHERE user_id='$rezultat1'"; 
			$result4 = mysqli_query($conn, $sql4); 
		}   
    }
    else
    if(isset($_POST['progres-orientare'])) {
         
		$sql2 = "SELECT progres_orientare FROM users_progress WHERE user_id='$rezultat1'";
		$result = mysqli_query($conn, $sql2); 
		$count  = mysqli_num_rows($result); 

		if ($count == "0") { 
			$sql3    = "INSERT INTO users_progress (user_id, progres_orientare) VALUES('$rezultat1', 100)"; 
			$result3 = mysqli_query($conn, $sql3);
		} else {
			$sql4    = "UPDATE users_progress SET progres_orientare=100 WHERE user_id='$rezultat1'"; 
			$result4 = mysqli_query($conn, $sql4); 
		}
        
    }

    header("location: semne-rutiere.php");
    exit;
    
?>
		