<?php
	session_start();

require 'connection.php';

//login session required to access page
if(!isset($_SESSION['email'])){
	header("Location: ./login.php");
}else{
     //Used for each item clicked on
	$inid=$_GET['INID'];
    $upid=$_SESSION['UPID'];


//Pulls the item info from the inventory database that gets clicked on
$query = "SELECT *FROM inventory where INID='$inid'";

$result = mysqli_query($conn, $query);



 while ($row = mysqli_fetch_assoc($result)) {
	 
$name = $row['name'];
$inid = $row['INID'];
$price = $row['price'];
$image = $row['image'];
$size = $row['size'];
$qty_on_hand = $row['qty_on_hand'];
$gender = $row['gender'];
$color = $row['color'];
$brand = $row['brand'];




 

	 
	 
	 ?>
	 

<!DOCTYPE html>
<html lang="en">
<head>
  <title>The Shoe Store</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <link rel="stylesheet" href="./css/styles.css">
 
  <style>
    body{
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
    }
	
	a:link, a:visited {
  
  text-decoration: none;
  
}

	
	/* Buy Button */
.buy a:visited {
  color: white;
  text-decoration: none;
  
}

.buy a:link {
  color: white;
  text-decoration: none;
  
}

.buy a:hover, a:active {
 
 
  text-decoration: none;

}

/* End of Buy Button */


/*Top left nav logo */

 .logo1{
      width: 220px;
    position: relative;
    height: 800px;
	 filter: grayscale(100%);
 }
   
   
   
 		.buy {
	text-transform: uppercase;
	background: #F68B1E;
	border: 1px solid #F68B1E;
	cursor: pointer;
	color: #fff;
	padding: 8px 40px;
	margin-top: 10px;
				}

	
/* footer for page */
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


/* end of footer for specific page */
	

  </style>
</head>
<body>

<!--start navbar-->
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
//keeps cart data from page to page 
$upid=$_SESSION['UPID'];
$user_products_query="select it.INID,it.name,it.image, it.price from users_items ut inner join inventory it on it.INID=ut.INID where ut.UPID='$upid'";
    $user_products_result=mysqli_query($conn,$user_products_query) or die(mysqli_error($conn));
    $no_of_user_products= mysqli_num_rows($user_products_result);
	//no_of_user_products used for cart display of how many items in cart
 
	 ?>
	
<div class="cart_div">
<a href="cart.php"><img src="./images/carticon.png" class="logo"  /> <span><?php echo
$no_of_user_products; ?> </span></a>
</div>

</div>
<!--end navbar--> 
	 
	 <div id="container">
   <!--content area-->
		<main id="center" class="column">
		<article>
		<?php
		
		
$query = "SELECT *FROM inventory where INID='$inid'";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($result)) {
	 
	 ?>
	 <!--display of specific item information--> 
	<div class="card">
	<h1>
	 <p>NAME: <?php echo $row['name'] ?></p>
	 
	  <p>BRAND: <?php echo $row['brand'] ?></p>
	
	  <p>SIZE: <?php echo $row['size'] ?></p>
	  
	  <p>GENDER: <?php echo $row['gender'] ?></p>
	  
	    <p>Color: <?php echo $row['color'] ?></p>
	  
	   <p>PRICE: $<?php echo $row['price'] ?></p>
	   </h1>

	</div>
	
	
	 
	 <?php
	 
	 //echo the item image, and buy now button 
	 echo "<div class='card'>
    <form method='post' action=''>
    <input type='hidden' name='INID' value=".$row['INID']." />
	<input type='hidden' name='qty_on_hand' value=".$row['qty_on_hand']." />
    <div class='image'><a href='viewpage.php?INID=".$row['INID']."'/><img width=300px img height=300px src='./images/".$row['image']."'/></a>", " </div>
    <button type='submit' class='buy'><a href='cart_add.php?INID=".$row['INID']."'/>Buy Now</button>
    </form>
    </div>";
	
	
	
	
 }
 ?>
	
</article>
</main>
</div>


<!-- Footer -->
 <footer class="footer-distributed">
 
 <div class="footer-left">
 
 <a href="home.php"><h3>The Shoe Store</h3></a>
 
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
<?php
 }
 }
	
?>