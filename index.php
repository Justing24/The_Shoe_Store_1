<?php
session_start();
$status="";
require 'connection.php';

if (isset($_POST['INID']) && $_POST['INID']!=""){
$inid = $_POST['INID'];
$sql = "SELECT *FROM inventory WHERE INID= '$inid'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$name = $row['name'];
$inid = $row['INID'];
$price = $row['price'];
$image = $row['image'];
$size = $row['size'];


$cartArray = array(
	$inid=>array(
	'name'=>$name,
	'INID'=>$inid,
	'price'=>$price,
	'qty_in_stock'=>1,
	'size'=>$size,
	'image'=>$image)
);



}

	
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

 .logo1{
      width: 220px;
    position: relative;
    height: 800px;
	 filter: grayscale(100%);
 }
	
	 .row{
		 margin-right:-15px;
		 margin-left:-15px;
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
				.wrapper .sidebar{
    background: black;    
	position: fixed;
    top: 0;
left: 0;
    width: 235px;
    height: 200%;
    padding: 20px 0;
    transition: all 0.5s ease;

}

.wrapper .sidebar .profile{
    margin-bottom: 30px;
    text-align: center;
}

.wrapper .sidebar .profile img{
    display: block;
    width: 200px;
    height: 50px;
   
    margin: 0 auto;
}

.wrapper .sidebar .profile h3{
    color: #ffffff;
    margin: 10px 0 5px;
}

.wrapper .sidebar .profile p{
    color: rgb(206, 240, 253);
    font-size: 14px;
}
.wrapper .sidebar ul li a{
    display: block;
    padding: 13px 30px;
   
    font-size: 16px;
    position: relative;
	text-decoration:none;
	left: 0;
	top: 0;
}

.wrapper .sidebar ul li a .icon{
    color: #dee4ec;
    width: 30px;
    display: inline-block;
}


.wrapper .sidebar ul li a:hover,
.wrapper .sidebar ul li a.active{
    color: black;

   
   
}

.wrapper .sidebar ul li a:hover .icon,
.wrapper .sidebar ul li a.active .icon{
    color: #0c7db1;
}

.wrapper .sidebar ul li a:hover:before,
.wrapper .sidebar ul li a.active:before{
    display: block;
}


/* end of side navbar */
	

					
</style>
</head>
<body>

<!--start navbar-->
<div class="topnav">
  <a href="index.php"><img src="./images/logo.jpg" class="logo"></a>
  
  
  <div class="dropdown">
	
   <button class="dropbtn"></button>
    <div class="dropdown-content">
     
    </div>
  </div>
            
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
<a><input type="button" class="login-button" value="Login" onclick="location.href='login.php';"></a>
<a><input type="button" class="login-button" value="Signup" onclick="location.href='signup.php';"></a>
</div>
</div>
<!--end navbar-->




<div id="container">

		<main id="center" class="column">
		<article>
		

			<?php

 
            $inid = 'INID';
 $query = "SELECT *FROM inventory";
 $result = mysqli_query($conn, $query);

 while ($row = mysqli_fetch_assoc($result)) {

    echo "<div class='card'>
    <form method='post' action=''>
    <input type='hidden' name='INID' value=".$row['INID']." />
    <div class='image'><a href='viewpage.php?inid=".$row['INID']."'/><img width=40% src='./images/".$row['image']."'/></a>", " </div>
    <div class='name'>".$row['name']."</div>
	<div class='size'>Size:".$row['size']."</div>
    <div class='price'>$".$row['price']."</div>
    <button type='submit' class='buy'>Login to Add Items to Cart</button>
    </form>
    </div>";
	
	
        }
mysqli_close($conn);
?>
<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>


</article>

</main>


 <?php
 
 require 'sidebar.php';
 
 ?>
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