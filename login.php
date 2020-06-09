<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    
    <form action="login.php" method="POST">
       
            <h2>Welcome!</h2>

             <!-- display validation errors here -->
                   <?php include('errors.php'); ?> 
			
            <label for="email"><b><i>Email:</i></b></label>
            <input id="email" type="text" placeholder="Email" name="email" required>
			
             <label for="parola" ><b><i>Password:</i></b></label>
             <input id="parola" type="password" placeholder="Parola" name="parola" required>
			 
             <input type="submit" class="logButton" name="log_user" value="Login">
			 
        
             <p class="question">Forgot <a href="enter_email.php">password?</a></p>

            <h3>Click on Register for create an account!</h3>

            <a href="register.php" class="register">Register</a>

        

    </form>
</body>
</html>