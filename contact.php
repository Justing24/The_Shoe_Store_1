<?php
require 'header2.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>The Shoe Store</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
   <link rel="stylesheet" href="./css/styles.css" type="text/css">
 
  <style>
    body{
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
    }

 .logo1{
      width: 220px;
    position: relative;
    height: 800px;
	 filter: grayscale(100%);
 }


.message_box .box{
	margin: 10px 0px;
	border: 1px solid #2b772e;
	text-align: center;
	font-weight: bold;
	color: #2b772e;
	}

.cart_div {
	
	font-weight:bold;
	position: relative;
	}
.cart_div a {
	color:#000;
	}	
.cart_div span {
	font-size: 12px;
	line-height: 10px;
	background: #F68B1E;
	padding: 2px;
	border: 2px solid #fff;
	border-radius: 50%;
	position: absolute;
   
	left: 565px;
	color: #fff;
	width: 20px;
	height: 12px;
	text-align: center;
	
	}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
display: none;
}

.img {vertical-align: middle;}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -10px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #black;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1000000s;
  animation-name: fade;
  animation-duration: 100000s;
}

@-webkit-keyframes fade {
  from {opacity: 1}
  to {opacity:1}
}

@keyframes fade {
  from {opacity: 1}
  to {opacity: 1}
}
	@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}

#container {
  overflow: hidden;
  margin-left: 125px;
  padding-top: -50px;
}

#container .column {
  padding-bottom: 1001em;
  margin-bottom: -1000em;
  position: relative;
  float: left;
}

#left {
  width: 180px;
  padding: 0 10px;
  right: 100px;
  margin-left: -100%;
  background: white;
}

#container .column {
  padding-top: 1em;
}
h1 {
	
	 padding-left: 420px;
	 
}

footer {
  bottom: 0;
  position: relative;
width: 100%;
left 0;
}
.footer-distributed {
  background-color: #000000;
  box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
  box-sizing: border-box;
  width: 100%;
  text-align: left;
  font: bold 16px sans-serif;
  
  padding: 55px 50px;
  margin-top: 80px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right {
  display: inline-block;
  vertical-align: top;
}

.footer-distributed .footer-left {
  width: 40%;
}

.footer-distributed h3 {
  color: #ffffff;
  font: normal 36px "Cookie", cursive;
  margin: 0;

}

.footer-distributed h3 span {
  color: #5383d3;
}

.footer-distributed .footer-links {
  color: #ffffff;
  margin: 20px 0 12px;
  padding: 0;


}

.footer-distributed .footer-links a {
  display: inline-block;
  line-height: 1.8;
  text-decoration: none;
  color: white;
}

.footer-distributed .footer-company-name {
  color: #8f9296;
  font-size: 14px;
  font-weight: normal;
  margin: 0;

}

.footer-distributed .footer-center {
  width: 35%;
}

.footer-distributed .footer-center i {
  background-color: #33383b;
  color: #ffffff;
  font-size: 25px;
  width: 38px;
  height: 38px;
  border-radius: 50%;
  text-align: center;
  line-height: 42px;
  margin: 10px 15px;
  vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope {
  font-size: 17px;
  line-height: 38px;
}

.footer-distributed .footer-center p {
  display: inline-block;
  color: #ffffff;
  vertical-align: middle;
  margin: 0;
}

.footer-distributed .footer-center p span {
  display: block;
  font-weight: normal;
  font-size: 14px;
  line-height: 2;
}

.footer-distributed .footer-center p a {
  color: #5383d3;
  text-decoration: none;
  padding-top: 50px;
}

.footer-distributed .footer-right {
  width: 20%;
}

.footer-distributed .footer-company-about {
  line-height: 20px;
  color: #92999f;
  font-size: 13px;
  font-weight: normal;
  margin: 0;
}

.footer-distributed .footer-company-about span {
  display: block;
  color: #ffffff;
  font-size: 14px;
  font-weight: bold;
  margin-bottom: 20px;
}

.footer-distributed .footer-icons {
  margin-top: 25px;
}

.footer-distributed .footer-icons a {
  display: inline-block;
  width: 35px;
  height: 35px;
  cursor: pointer;
  background-color: black;
  border-radius: 2px;

  font-size: 20px;
  color: #ffffff;
  text-align: center;
  line-height: 35px;

  margin-right: 3px;
  margin-bottom: 5px;
}

.footer-distributed {
  font: bold 14px sans-serif;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right {
  display: block;
  width: 100%;
  margin-bottom: 40px;
  text-align: center;

}

  </style>
</head>


<!--start navbar-->
<body>
<div class="topnav">
  <a href="home.php"><img src="./images/logo.jpg" class="logo"></a>
  	<div class="dropdown">
   <button class="dropbtn">Brands</button>
    <div class="dropdown-content">
      <a href="nike.php">Nike</a>
	   <a href="adidas.php">Adidas</a>
      <a href="jordan.php">Jordan</a>
	  <a href="allbrands.php">All Brands</a>
    </div>
  </div>
            
            
			<div class="dropdown">
    <button class="dropbtn">Men's
     
    </button>
    <div class="dropdown-content">
      <a href="mensshoes.php">Footwear</a>
	
    </div>
  </div>
            
			
					  <div class="dropdown">
    <button class="dropbtn">Women's
     
    </button>
    <div class="dropdown-content">
      <a href="womensshoes.php">Footwear</a>
     
    </div>
  </div>
	
	
	
	<div class="topnav-right">
    
				
				
<?php
require 'connection.php';

     $upid=$_SESSION['UPID'];
    $strSQL = "SELECT * FROM user_profile where UPID = '$upid'";
 
    // Execute the query (the recordset $rs contains the result)
    $rs = mysqli_query($conn, $strSQL);

    // Loop the recordset $rs
    // Each row will be made into an array ($row) using mysqli_fetch_array
    while($row = mysqli_fetch_array($rs)) {

       // Write the value of the column FirstName (which is now in the array $row)
  

  echo "<div class='dropdown'>
	<a><div class='name'>Welcome ".$row['first_name']."  </div></a>
</div>";


      }

  
    ?>
			
	<a><input type="button" class="login-button" value="Logout" onclick="location.href='logout.php';"></a>
	</div>
<?php
$upid=$_SESSION['UPID'];
$user_products_query="select it.INID,it.name,it.image, it.price from users_items ut inner join inventory it on it.INID=ut.INID where ut.UPID='$upid'";
    $user_products_result=mysqli_query($conn,$user_products_query) or die(mysqli_error($conn));
    $no_of_user_products= mysqli_num_rows($user_products_result);
 
	 ?>
	
<div class="cart_div">


<a href="cart.php"><img src="./images/carticon.png" class="logo"  /> <span><?php echo
$no_of_user_products; ?> </span></a>
</div>

</div>
<!--end navbar--> 


<div id="container">

		<main id="center" class="column">
			<article>
			



<h2>Contact Us</h2>

<form action="mailto:theshoestoresupport@gmail.com" method="post" enctype="text/plain">
Name:<br>
<input type="text" name="name" placeholder="Enter First & Last Name"><br>
E-mail:<br>
<input type="text" name="mail" placeholder="Enter Your Email"><br>
Message:<br>
<input type="text" name="comment" size="50" placeholder="Enter Message"><br><br>
<div>
      <button type="reset" class="cancelbtn">Reset</button>
      <button type="submit" class="signupbtn">Send</button>
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
 <a href="home.php">Home</a>
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
