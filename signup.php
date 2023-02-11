<?php
    require 'connection.php';
	
    session_start();
	
	   if(isset($_SESSION['email'])){
        header('location: home.php');
    }
?>



<!DOCTYPE html>
<html>
    <head>
     
        <link rel="stylesheet" href="./css/styles.css" type="text/css">
		
		<style>
		
		 body {margin: 0; padding: 0; font-family: Arial, Helvetica, sans-serif;}
    * {box-sizing: border-box}

    /* Full-width input fields */
    input[type=text], input[type=password], input[type=email] {
      width: 25%;
      padding: 16px;
      margin: 5px 0 22px 0;
      display: inline-block;
      border: none;
      background: white;
      border-radius: 12px;
    }

    input[type=text]:focus, input[type=password]:focus, input[type=email]:focus {
      background-color: lightgray;
      outline: none;
    }

    
  
    /* Add padding to container elements */
    .container {
      padding: 16px;
      text-align: center;
	  background-color: white;
    }

    .container label{
     width: 25%;
      padding: 16px;
      margin: 5px 0 22px 0;
    
      border: none;
      background: white;
      border-radius: 12px;
	  text-align: left;
    }
	
	</style>
    </head>
    <body>
       
          <div>
        <div class="topnav">
    <a href="./index.php"><img src="./images/logo.jpg" class="logo"></a>
    </div>
           
<div id="container">

		<main id="center" class="column">
		<article>
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <br>
                        <form method="post" action="user_registration_script.php">
     <label for="first_name" class="name"><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="first_name" required>
	
	<label for="last_name" class="name"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="last_name" required><br>
   
    
    <label for="contact"><b>Contact</b></label>
    <input type="text" placeholder="Enter Phone #" name="phone_number" required>
	
	<label for="city"><b>City</b></label>
    <input type="text" placeholder="Enter City" name="city" required><br>
    
	
	<label for="zip_code"><b>Zip Code</b></label>
    <input type="text" placeholder="Enter Zip Code" name="zip_code" required>
	
	<label for="state"><b>State</b></label>
    <input type="text" placeholder="Enter State Abbreviation" name="state" required><br>
	
	<label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="address" required>
	
		<label for="dob"><b>Date Of Birth</b></label>
    <input type="text" placeholder="MM/DD/YYYY" name="dob" required><br>
	
	<label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" required>
    
    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password(min. 6 characters)" name="password" required><br><br><br>
    

    <label style="text-align: center;">
      <input type="checkbox" name="tos" style="margin-bottom: 15px;" required> By creating an account you agree to our Terms & Conditions.
    </label>
	
<br><br><br>

	
	<div>
      <button onclick="location.href='index.php'"type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Signup</button>
	  </div>
                        </form>
						
						</article>

</main>
</div>
                    <!-- Footer -->
 <footer class="footer-distributed">
 
 <div class="footer-left">
 
 <h3>The Shoe Store</h3>
 
 <p class="footer-links">
 <a href="index.php">Home</a>
 ·
 <a href="about.php">About</a>
 ·
 <a href="faq.php">Faq</a>
 ·
 <a href="contact.php">Contact</a>
 </p>
 
 <p class="footer-company-name">The Shoe Store</p>
 </div>
 
 </footer>

</body>
</html>
