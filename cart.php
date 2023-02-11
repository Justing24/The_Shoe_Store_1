
<?php
    session_start();
    require 'connection.php';
	//login session required to access page
    if(!isset($_SESSION['email'])){
        header('location: login.php');
    }
	//Start of session and pulls items from user_items and links with inventory table from database
    $upid=$_SESSION['UPID'];
    $user_products_query="select it.INID,it.name,it.image,it.price from users_items ut inner join inventory it on it.INID=ut.INID where ut.UPID='$upid'";
    $user_products_result=mysqli_query($conn,$user_products_query) or die(mysqli_error($conn));
    $no_of_user_products= mysqli_num_rows($user_products_result);
    $total_price=0;
    if($no_of_user_products==0){
        //echo "Add items to cart first.";
    ?>
        <script>
        window.alert("No items in the cart!!");
        </script>
    <?php
	 //adds total price for each item
    }else{
        while($row=mysqli_fetch_array($user_products_result)){
            $total_price=$total_price+$row['price']; 
     
       }
	   
	    
    }
	


?>

  





<!DOCTYPE html>
<html>
    <head>
        
        <title>Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <link rel="stylesheet" href="./css/styles.css">
		
    
  <style>


    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
    }


	
	
	/* confirm order button */

.checkoutbtn {
  background-color: #4297ff;
  color: white;
  font-size: 12px;
  border: none;
  border-radius: 12px;
  cursor: pointer;
  width: fit-content;
  opacity: 0.9;
  padding: 10px;
  margin: 0 10px;
  display: inline-block;
  text-decoration: none;
}

/* remove item button */

.cancelbtn {
  background-color: #f44336;
  color: white;
  font-size: 12px;
  border: none;
  border-radius: 12px;
  cursor: pointer;
  width: fit-content;
  opacity: 0.9;
  padding: 10px;
  margin: 0 10px;
  display: inline-block;
  text-decoration: none;
}

/* start of footer */


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

/* end of footer */

  </style>
</head>



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
	

    
  </div>
  <!--end navbar-->
<body>

  <!--content area-->
  <div id="container">

    <main id="center" class="column">
      <article>

        <div class="container">
		           <!--cart table display -->
                <table class="table table-bordered table-striped">
				
                    <tbody>
                        <tr>
                            <th>Item Number</th><th>    </th><th>Item Name</th><th>Price</th><th></th>
                        </tr>
						
						
						  <!--item counter and item display-->
                       <?php 
					   
                        $user_products_result=mysqli_query($conn,$user_products_query) or die(mysqli_error($conn));
                        $no_of_user_products= mysqli_num_rows($user_products_result);
                        $counter=1;
                       while($row=mysqli_fetch_array($user_products_result)){
                           
                         ?>
                        <tr>
                            <th><?php echo $counter ?></th><th><img src='./images/<?php echo $row['image']; ?>' width="100" height="75" /></th><th><?php echo $row['name']?></th><th>$<?php echo $row['price']?></th>
                            <th><a href='cart_remove.php?INID=<?php echo $row['INID'] ?>'class="cancelbtn">Remove</a></th>
                        </tr>
                       <?php $counter=$counter+1;}?>
                        <tr>
						
						<?php
					   $vat = 8.75;
                $vatToPay = ($vat / 100);
                $tax = ($total_price * $vatToPay);
                $pricetopay = ($total_price + $tax);
					  ?>
					  
					  

                           <th></th>
                <th>Subtotal $<?php echo number_format($total_price, 2); ?></th>
                <th>Tax $<?php echo number_format($tax, 2); ?></th><br>
                <th>Total $<?php echo number_format($pricetopay, 2); ?></th>
                <th><a href="payment.php?id=<?php echo $upid ?>" class="checkoutbtn">Confirm Order</a></th>
                        </tr>
					
                    </tbody>
                </table>
            </div>
            <br><br><br><br><br><br><br><br><br><br>
          
      </article>
    </main>
	
	
	</div>
 </body>


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


</html>