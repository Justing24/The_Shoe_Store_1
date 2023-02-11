<?php

session_start();
include("includes/connection.inc.php");
include("includes/functions.inc.php");

// require 'connection.php';
if (!isset($_SESSION['email'])) {
    header('location:index.php');
} else {
    $conn = openConnection();
    $upid = $_SESSION['UPID'];

    try {
        //Selecting all user items
        $result = $conn->query("SELECT * FROM `users_items` WHERE UPID='$upid' and status = 'Added to Cart'");

        // throw new Exception('Oops this is my error');
        
        while ($usersItem = $result->fetch_assoc()) {
            $UIID = $usersItem['UIID'];
            $INID = $usersItem['INID'];

            $inventory = $conn
                ->query("SELECT * FROM `inventory` WHERE INID = '$INID'")
                ->fetch_assoc();

            $qtySold = $inventory['qty_sold'] + 1;
            $qtyOnHand = $inventory['qty_on_hand'] - 1;

            $conn->query("UPDATE `inventory` SET qty_sold = '$qtySold', qty_on_hand = '$qtyOnHand' WHERE INID = '$INID'");
            //delete all user_items ids
            $conn->query("DELETE FROM `users_items` WHERE UIID ='$UIID'");

            $conn->query("INSERT INTO `confirmed_orders`(`UPID`, `INID`, `status`) VALUES ('$upid', '$INID', 'Confirmed')");
    

        }

            // $upid = $_SESSION['UPID'];
            // $query = "SELECT *FROM temp_order WHERE UPID='$upid' ORDER BY UPID DESC ";
            // $result = mysqli_query($conn, $query);

            // while ($row = mysqli_fetch_assoc($result)) {

            //     $confirm_order_query = "update temp_order set is_completed='yes' LIMIT 1";
            //     $confirm_order_query_result = mysqli_query($conn, $confirm_order_query) or die(mysqli_error($conn));
            //     $delete_query = "delete from temp_order where UPID='$upid' and is_completed='no'";
            //     $delete_query_result = mysqli_query($conn, $delete_query) or die(mysqli_error($conn));
            //     $sql = "select * from temp_order where (UPID='$upid');";
            //     $res = mysqli_query($conn, $sql);
            //     $query = mysqli_query($conn, "INSERT INTO order_info
            //    SELECT * FROM temp_order WHERE UPID =$upid");
            //     $destroy_query = "delete from temp_order where UPID='$upid'";
            //     $destroy_query_result = mysqli_query($conn, $destroy_query) or die(mysqli_error($conn));
            // }
            // $delete_query="delete from order_info where UPID='$upid' and is_completed='no'";
            // $delete_query_result=mysqli_query($conn,$delete_query) or die(mysqli_error($conn));
            //     $confirm_query="update users_items set status='Confirmed' where UPID='$upid'";
            //     $confirm_query_result=mysqli_query($conn,$confirm_query) or die(mysqli_error($conn));
            //     $sql="select * from users_items where (UPID='$upid');";
            //      $res=mysqli_query($conn,$sql);
            //      $query=mysqli_query($conn,"INSERT INTO confirmed_orders
            //         SELECT * FROM users_items WHERE UPID =$upid");
            //      $delete_query="delete from users_items where UPID='$upid' and status='Confirmed'";
            // $delete_query_result=mysqli_query($conn,$delete_query) or die(mysqli_error($conn));
            $conn->close();
    } catch (exception $e) {

        header("HTTP/1.1 400 Bad Request");
    }
}

