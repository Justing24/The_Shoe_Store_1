<?php
    require 'connection.php';
    session_start();
	
	
    $inid=$_GET['INID'];
    $upid=$_SESSION['UPID'];
    $delete_query="delete from users_items where UPID='$upid' and INID='$inid'";
    $delete_query_result=mysqli_query($conn,$delete_query) or die(mysqli_error($conn));
    header('location: cart.php');
	
?>