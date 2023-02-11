<?php
include("includes/connection.inc.php");

if (isset($_GET['uid'])) {
    $UPID = $_GET['uid'];

    $conn = openConnection();
    $sql="delete from `user_profile` where UPID=$UPID";
    $result=mysqli_query($conn, $sql);
    if($result) {
        // echo "deteled successfully!";
        header('Location:displayUser.php');
    } else {
        die(mysqli_errno($conn));
    }
}
?>