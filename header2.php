<?php

session_start();
$status="";
require 'connection.php';

//user must be logged in or else shown to login page
if(!isset($_SESSION['email'])){
	header("Location: ./login.php");
}else{
	
//selects each item from inventory database 
if (isset($_POST['INID']) && $_POST['INID']!=""){
$inid = $_POST['INID'];
$sql = "SELECT *FROM inventory WHERE INID= '$inid'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

//stores item in array so when called it will display information that is needed 

$name = $row['name'];
$inid = $row['INID'];
$price = $row['price'];
$image = $row['image'];
$size = $row['size'];
$qty_on_hand = $row['qty_on_hand'];
$color = $row['color'];




//checks if item is in cart or not so it can get added or not get added if in cart already

	$inid=$_POST['INID'];
    $upid=$_SESSION['UPID'];
 $product_check_query="select * from users_items where INID='$inid' and UPID='$upid' and status='Added to cart'";
        $product_check_result=mysqli_query($conn,$product_check_query) or die(mysqli_error($conn));
        $num_rows=mysqli_num_rows($product_check_result);
        if($num_rows>=1){
?>
        <script>
        window.alert("Product is already added to cart");
        </script>
    <?php
		}else{
//will add item to cart if not in cart (users_items)
    $add_to_cart_query="insert into users_items(UPID,INID,status) values ('$upid','$inid','Added to cart')";
    $add_to_cart_result=mysqli_query($conn,$add_to_cart_query) or die(mysqli_error($conn));
	
		}

		}
	
	
    
	}

  
	
	?>