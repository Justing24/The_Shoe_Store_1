<?php
require 'header2.php';

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
  background-color: black;
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
  margin-left: 135px;
  padding-top: -50px;
}

#container .column {
  padding-bottom: 1001em;
  margin-bottom: -1000em;
  position: relative;
  float: left;
}



#container .column {
  padding-top: 1em;
}
h1 {
	
	 padding-left: 420px;
	 
}
/* footer start */
footer {
  bottom: 0;
  position: relative;
  width: 100%;
  left : 0;
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

/* footer end */

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

// Shows the Welcome and User first name in top right greeting
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

//selects items from cart to show number of items in cart 
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

<br><br>
<br>
<br>

	
	
		
<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images -->
  <div class="mySlides fade">
  
  <a href='allbrands.php'  ><img src="./images/slide1.PNG" style="width:100%"></a>
 
  </div>

  <div class="mySlides fade">
   
     <a href='lessthan100.php'  > <img src="./images/slideimg2.PNG" style="width:100%" >
   
  </div>

  <div class="mySlides fade">

    <a href='newest.php' ><img src="./images/slideimg3.PNG" style="width:100%">
    
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
<br>
<br>
<br>
<div id="container" class="column">
<h1>Newest Arrivals</h1>
		
		<article>
		

			<?php

 // selects 3 most recent shoes added to database
           
 $query = "SELECT *FROM inventory ORDER by INID DESC LIMIT 3";
 $result = mysqli_query($conn, $query);

 while ($row = mysqli_fetch_assoc($result)) {

 
  require 'items.php';
 
        }

?>

<br><br><br><br><br>

</article>




</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>








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


