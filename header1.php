



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

.message_box .box{
	margin: 10px 0px;
	border: 1px solid #2b772e;
	text-align: center;
	font-weight: bold;
	color: #2b772e;
	}
.table td {
	border-bottom: #F0F0F0 1px solid;
	padding: 10px;
	}

	
	
	   /* Full-width input fields */
    input[type=text], input[type=password], input[type=email] {
      width: 25%;
      padding: 16px;
      margin: 5px 0 22px 0;
      display: inline-block;
      border-style: solid;
      background: white;
      border-radius: 12px;
    }
	
	input[type=text]:focus, input[type=password]:focus, input[type=email]:focus {
      background-color: lightgray;
      outline: none;
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
   
	left: 595px;
	color: #fff;
	width: 20px;
	height: 12px;
	text-align: center;
	
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
  <a href="home.php"><img src="./images/logo.jpg" class="logo"></a>
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


<a href="cart.php"><img src="./images/carticon.png" class="logo"/> <span><?php echo
$no_of_user_products; ?> </span></a>
</div>




</div>


<!--end navbar--> 