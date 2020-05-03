<?php

    session_start();

    $nume = "";
    $prenume = "";
    $email = "";
    $parola = "";
    $parola2 = "";
    $errors = array();

    //$db = mysqli_connect("fenrir.info.uaic.ro","trastDB","OTuQEKdt8O","trastDB");
	$db = mysqli_connect("localhost","root","","trastDB");

    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if(isset($_POST['reg_user']))
    {
        $nume = mysqli_real_escape_string($db, $_POST['nume']);
        $prenume = mysqli_real_escape_string($db, $_POST['prenume']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $parola = mysqli_real_escape_string($db, $_POST['parola']);
        $parola2 = mysqli_real_escape_string($db, $_POST['parola2']);
    }
    
    if(empty($nume)){
        array_push($errors, "Username is required");
    }

    if(empty($prenume)){
        array_push($errors, "Prenume is required");
    }

    if(empty($email)){
        array_push($errors, "Email is required");
    }

    if(empty($parola)){
        array_push($errors, "Parola is required");
    }

    if(empty($parola2)){
        array_push($errors, "Confirma parola is required");
    }

    if($parola != $parola2){
        array_push($errors, "Parolile nu se potrivesc");
    }


    $user_check_query = "SELECT * FROM utilizatori WHERE email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
  
    //???????? fara user verification; doar mail .. cred..
    if ($user) { // if user exists
        if ($user['nume'] === $nume) {
         array_push($errors, "Username already exists");
         }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
        }
    }


    if(count($errors) == 0)
    {
        $parola = md5($parola);
        $query = "INSERT INTO utilizatori (nume,prenume,email,parola) VALUES ('$nume','$prenume','$email','$parola')";
        mysqli_query($db,$query);

        $_SESSION['nume'] = $nume;
  	    $_SESSION['success'] = "You are now logged in";
  	    header('location: index.html');
    }


    //LOGIN USER 

    if(isset($_POST[login_user]))
    {
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $parola = mysqli_real_escape_string($db, $_POST['parola']);

        if(empty($email))
            array_push($errors, "email id required");

        if(empty($parola))
            array_push($errors, "password is required");

        if(count($errors) == 0){
            $parola = md5($parola);
            $query = "SELECT * FROM utilizatori WHERE email = '$email' AND parola = '$parola'";
            $results = mysqli_query($db, $query);

            if(mysqli_num_rows($results) == 1)
            {
                $_SESSION['email'] = $email;
                $_SESSION['success'] = "You are now logged in";
                header('location: index.html');
            }
            else
            {
                array_push($errors, "Wrong email/password combination");
            }
        }
    }
        
    
?>