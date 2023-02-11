<?php
session_start();

include("includes/connection.inc.php");
include("includes/functions.inc.php");

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $brand = $_POST['brand'];
  $image = $_POST['image'];
  $color = $_POST['color'];
  $gender = $_POST['gender'];
  $size = $_POST['size'];
  $price = $_POST['price'];
  $qtyReceived = $_POST['qty_received'];
  $qtySold = $_POST['qty_sold'];
  $qtyOnHand = $_POST['qty_on_hand'];


  $conn = openConnection();
  $sql = "insert into `inventory`(`name`, `brand`, `image`, `color`, `gender`, `size`, `price`, `qty_in_stock`, `qty_sold`) values('$name', '$brand', '$image', '$color', '$gender', '$size', '$price', '$qtyReceived', '$qtySold', '$qtyOnHand')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    // echo "Data inserted successfully";
    header('Location: display.php');
  } else {
    die(mysqli_error($conn));
  }
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
</head>

<body>
  <style>
    .btn-primary {
      margin-top: 10px;
    }

    .content {
      margin: 16px;
    }

    .text-center {
      text-align: center;
    }

    :root {
      --bs-body-font-size: 1rem;
      --bs-body-font-weight: 400;
      --bs-body-line-height: 1.5;
      --bs-font-sans-serif: system-ui, -apple-system, "Segoe UI", Roboto,
        "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif,
        "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
      --bs-body-font-family: var(--bs-font-sans-serif);
      --bs-body-color: #212529;
      --bs-body-bg: #fff;
    }

    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
    }

    body {
      font-family: var(--bs-body-font-family);
      font-size: var(--bs-body-font-size);
      font-weight: var(--bs-body-font-weight);
      line-height: var(--bs-body-line-height);
      color: var(--bs-body-color);
      text-align: var(--bs-body-text-align);
      background-color: var(--bs-body-bg);
      -webkit-text-size-adjust: 100%;
      -webkit-tap-highlight-color: transparent;
    }

    .form-label {
      display: inline-block;
      margin-bottom: 0.5rem;
    }

    .form-control {
      width: 100%;
      padding: 0.375rem 0.75rem;
      font-size: 1rem;
      font-weight: 400;
      line-height: 1.5;
      color: #212529;
      background-color: #fff;
      background-clip: padding-box;
      border: 1px solid #ced4da;
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      border-radius: 0.25rem;
      transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
      margin: 0;
    }

    .btn {
      display: inline-block;
      font-weight: 400;
      line-height: 1.5;
      color: #212529;
      text-align: center;
      text-decoration: none;
      vertical-align: middle;
      cursor: pointer;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
      background-color: transparent;
      border: 1 px solid transparent;
      padding: 0.375rem 0.75rem;
      font-size: 1rem;
      border-radius: 0.25rem;
      transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .btn-primary {
      color: #fff;
      background-color: #0d6efd;
      border-color: #0d6efd;
    }

    .mt-1 {
      margin-top: 1rem;
    }
  </style>

  <div class="container">

    <?php include 'header.php'; ?>

         <div class="content">
         <h1>Inventory</h1>
      <form method="POST">
        <div class="mt-1">
            <label>Name</label>
            <input type="text" name="name" class="form-control" placeholder="name"">
        </div>
        <div class="mt-1">
            <label>Brand</label>
            <input type="text" name="brand" class="form-control" placeholder="brand">
            </div>
          <div class="mt-1">
            <label>Image</label>
            <input type="text" name="image" class="form-control" placeholder="image">
            </div>
          <div class="mt-1">
            <label>Color</label>
            <input type="text" name="color" class="form-control" placeholder="color">
            </div>
          <div class="mt-1">
            <label>Gender</label>
            <input type="text" name="gender" class="form-control" placeholder="gender">
            </div>
          <div class="mt-1">
            <label>Size</label>
            <input type="text" name="size" class="form-control" placeholder="size">
            </div>
          <div class="mt-1">
            <label>Price</label>
            <input type="text" name="price" class="form-control" placeholder="price">
            </div>
          <div class="mt-1">
            <label>Qty in Received</label>
            <input type="text" name="qty_received" class="form-control" placeholder="qty in stock">
            </div>
          <div class="mt-1">
            <label>Qty Sold</label>
            <input type="text" name="qty_sold" class="form-control" placeholder="qty sold">
            </div>
          <div class="mt-1">
            <label>Qty on Hand</label>
            <input type="text" name="qty_on_hand" class="form-control" placeholder="qty sold">
            </div>
          <button type="submit" class="btn btn-primary" name="submit">Save</button>
      </form>

    </div>

</body>

</html>