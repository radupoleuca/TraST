<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    
    <form action="login.php" method="POST">
        <div class="log">
            <h2>Welcome!</h2>
			
            <label for="email"><b><i>Email:</i></b></label>
            <input type="text" placeholder="Email" name="email" required>
			
             <label for="pasw" ><b><i>Password:</i></b></label>
             <input type="password" placeholder="Password" name="password" required>
			 
             <button type="submit" class="logBott">Login</button>
			 

             // cu sau fara checkbox?
             <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me!
             </label>
			 
            <button type="button" class="register" name="login_user">Login</button>
			 
        </div>
        <h3>Click on Register for create an account!</h3>
        <div class="cancel_div">
            <button type="button" class="cancelbutton">Cancel</button>
            <span class="pasw">Forgot <a href="#">password?</a></span>

        </div>
        
    </form>
</body>
</html>