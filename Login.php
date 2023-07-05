<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login/SignUp</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'><link rel="stylesheet" href="../CSS/loginstyle.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body>
<!-- partial:index.partial.html -->
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="#" method="POST">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" placeholder="Name" />
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<button>Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="#" method="POST">
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your account</span>
			<input type="email" placeholder="Email" name="email" id='email'/>
			<input type="password" placeholder="Password" name="password" />
			<a href="#">Forgot your password?</a>
			<button type= "submit">Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

  <!-- partial -->
  
  <?php

         //connecting to database//
         $servername = "localhost";
         $username = "root";
         $password = "";
         $database = "credentials";
         $conn = mysqli_connect($servername, $username, $password, $database);


    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
       $email = $_POST['email'];
       $password = $_POST['password'];
    

     // Check user is exist in the database
       
     $query    = "SELECT * FROM `credentials` WHERE email ='$email' AND password= '$password'";
     $result = mysqli_query($conn, $query) or die(mysqli_connect_error());
     $rows = mysqli_num_rows($result);
     
     if ($rows == 1) {
     $_SESSION['email'] = $email;
     // Redirect to user dashboard page
     
     //echo "<h3>welcome</h3>";
     echo '<script type="text/javascript">
     alert("Congrats!  f3de3vrjudswe84d");
     </script>';
     } else {
     echo "<div class='form'>
     <h3>Incorrect username/password.</h3><br/>
     <p class='link'>Click here to <a href='Login.php'>Login</a> again.</p>
     </div>";
     }
    } 
  ?>



    </body>
</html>



<?php








?>
