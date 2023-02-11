<?php

    require 'connection.php';
    session_start();
	
	
    $inid=$_GET['INID'];
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

header('Location: ' . $_SERVER['HTTP_REFERER']);
?>