<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="register2.css">
</head>
<body>
   
           <h2>Welcome to registration!</h2>

            <form method="post" action="register.php">    

                <!-- display validation errors here -->
                   <!--  <?php include('errors.php'); ?> -->
               
                

           <label for="name"><b><i>Nume: </i></b></label>
           <input type="text" name="nume" value="<?php echo $nume; ?>">

           <label for="lname"><b><i>Prenume: </i></b></label>
           <input type="text" name="prenume" value="<?php echo $prenume; ?>">

           <label for="email"><b><i>E-mail: </i></b></label>
           <input type="text" name="email" value="<?php echo $email; ?>" >

           <label for="parola"><b><i>Parola: </i></b></label>
           <input type="text" name="parola">

           <label for="parola2"><b><i>Confirmare parola: </i></b></label>
           <input type="text" name="parola2">

            
           <input type="checkbox" > I accepted the privacy policy!
           
           <button type="submit" class="submt" name="reg_user">Submit</button>

           <button type="button" class="cancelb">Cancel</button>


           </form>
        
      
</body>
</html>