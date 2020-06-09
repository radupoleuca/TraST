<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="login.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
   
           

            <form method="post" action="register.php">    

            <h2>Welcome to registration!</h2>

            <!-- display validation errors here -->
            <?php include('errors.php'); ?> 

           <div class="log">     

           <label for="nume"><b><i>Nume: </i></b></label>
           <input id="nume" type="text" name="nume" required value="<?php echo $nume; ?>">

           <label for="prenume"><b><i>Prenume: </i></b></label>
           <input id="prenume" type="text" name="prenume" required value="<?php echo $prenume; ?>">

           <label for="email"><b><i>E-mail: </i></b></label>
           <input id="email" type="text" name="email" required value="<?php echo $email; ?>" >

           <label for="parola"><b><i>Parola: </i></b></label>
           <input id="parola" type="password" name="parola" required>

           <label for="parola2"><b><i>Confirmare parola: </i></b></label>
           <input id="parola2" type="password" name="parola2" required>

           
           <button type="submit" class="registerButton" name="reg_user">Register</button>

           <p class="question"> Already a member? <a href="login.php">Sign in</a></p>

        </div>

        </form>
        
</body>
</html>