<?php 

  session_start();
    require 'connection.php';


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
	.inline-block {
	width: 150px;
	margin-top: 10px;
}

.row {
	margin: 15px 0px;
	display: flex;
}

.billing-details {
	margin: 20px 40px;
	width: 85%;
}

.billing-detail-heading {
	font-size: 1.5em;
	margin-bottom: 20px;
	margin-right: 105px;
	font-weight: bold;
}

.form-label {
	width: 150px;
	margin-top: 10px;
}

input.input-box-330 {
	border: 1px solid #9a9a9a;
	width: 200px;
	border-radius: 3px;
	padding: 7px;
}

.seller-note {
	width: 200px;
	border-radius: 4px;
}

.seller-label {
	width: 150px;
	margin-bottom: 3px;
}

.signupbtn{
  background-color: #4297ff;
  color: white;
  font-size: 16px;
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


.cancelbtn {
  background-color: #f44336;
  color: white;
  font-size: 16px;
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

  

  </style>
</head>
<body>


<?php

require 'header1.php';


?>

<?php

$upid=$_SESSION['UPID'];
$sql = "SELECT *FROM user_profile WHERE UPID= '$upid'";
    // Execute the query (the recordset $rs contains the result)
    $rs = mysqli_query($conn, $sql);

    // Loop the recordset $rs
    // Each row will be made into an array ($row) using mysqli_fetch_array
    while($row = mysqli_fetch_array($rs)) {

       // Write the value of the column FirstName (which is now in the array $row)

?>

<div id="container">

		<main id="center" class="column">
			<article>
			
			<div class="billing-detail-heading">Billing details</div>
<div class="row">
	<div class="form-label inline-block">
		Name 
                    </div>
	<div class="inline-block">
		<?php echo ''.$row['first_name'] . ""; ?>
		<?php echo ''.$row['last_name'] . ""; ?>
		
	</div>
</div>
<div class="row">
	<div class="form-label">Address                 </div>
	<div class="inline-block">
		<?php echo ''.$row['address'] . "<br />"; ?>
	</div>
</div>
<div class="row">
	<div class="form-label">City</div>
	<div class="inline-block">
       <?php echo ''.$row['city'] . "<br />"; ?>		
	</div>
</div>
<div class="row">
	<div class="form-label">State</div>
	<div class="inline-block">
		<?php echo ''.$row['state'] . "<br />"; ?>
	</div>
</div>
<div class="row">
	<div class="form-label">Zip Code</div>
	<div class="inline-block">
		<?php echo ''.$row['zip_code'] . "<br />"; ?>
	</div>
</div>
<div class="row">
	<div class="form-label">Contact</div>
	<div class="inline-block">
		<?php echo ''.$row['phone_number'] . "<br />"; ?>
	</div>
</div>



	
	<tr>
		
			<a href="payment.php" class="signupbtn">Continue to Payment</a>
			<a href="settings.php" class="cancelbtn">Edit Shipping Details</a>
		
		</tr>
</div>
				
				
				
			</article>								
		</main>
		<nav id="left" class="column">
		
		  </nav>
		 </div>
		 
		 <?php 
		 
	}
	
	?>
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