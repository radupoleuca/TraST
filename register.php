<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
   
           

            <form method="post" action="register.php">    

            <h2>Welcome to registration!</h2>

            <!-- display validation errors here -->
            <?php include('errors.php'); ?> 

           <div class="log">     

           <label for="nume"><b><i>Nume: </i></b></label>
           <input type="text" name="nume" required value="<?php echo $nume; ?>">

           <label for="prenume"><b><i>Prenume: </i></b></label>
           <input type="text" name="prenume" required value="<?php echo $prenume; ?>">

           <label for="email"><b><i>E-mail: </i></b></label>
           <input type="text" name="email" required value="<?php echo $email; ?>" >

           <label for="parola"><b><i>Parola: </i></b></label>
           <input type="password" name="parola" required>

           <label for="parola2"><b><i>Confirmare parola: </i></b></label>
           <input type="password" name="parola2" required>

           
           <button type="submit" class="registerButton" name="reg_user">Register</button>

           <p class="question"> Already a member? <a href="login.php">Sign in</a></p>

        </div>

        </form>
        
</body>
</html>