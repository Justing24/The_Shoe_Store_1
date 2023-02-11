<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location: login.php');
    }
    $upid=$_SESSION['UPID'];
    $user_products_query="select it.INID,it.name,it.image, it.price from users_items ut inner join inventory it on it.INID=ut.INID where ut.UPID='$upid'";
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
    }else{
        while($row=mysqli_fetch_array($user_products_result)){
            $total_price=$total_price+$row['price']; 
     
       }
    }
	
	?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Payment Checkout Form</title>
	
	<link rel="stylesheet" href="./css/styles.css" type="text/css">
		<link rel="stylesheet" href="./css/payment.css" type="text/css">
		
		<style>
		
		  body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
    }
	.product_wrapper {
	float:left;
	padding: 10px;
	text-align: center;
	}
.product_wrapper:hover {
	box-shadow: 0 0 0 2px #e5e5e5;
	cursor:pointer;
	}
.product_wrapper .name {
	font-weight:bold;
	}
.product_wrapper .buy {
	text-transform: uppercase;
	background: #F68B1E;
	border: 1px solid #F68B1E;
	cursor: pointer;
	color: #fff;
	padding: 8px 40px;
	margin-top: 10px;
}
.product_wrapper .buy:hover {
	background: #f17e0a;
	border-color: #f17e0a;
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
.cart_div {
	float:right;
	font-weight:bold;
	position:relative;
	}
.cart_div a {
	color:#000;
	}	
.cart_div span {
	font-size: 12px;
	line-height: 14px;
	background: #F68B1E;
	padding: 2px;
	border: 2px solid #fff;
	border-radius: 50%;
	position: absolute;
	top: -1px;
	left: 13px;
	color: #fff;
	width: 20px;
	height: 20px;
	text-align: center;
	}
.cart .remove {
	background: none;
	border: none;
	color: #0067ab;
	cursor: pointer;
	padding: 0px;
	}
.cart .remove:hover {
	text-decoration:underline;
	}
	
	
.signupbtn {
  background-color: #4297ff;
  color: white;
  font-size: 20px;
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

h2{
	
	text-align: center;
	margin-left: -190px;
	
}


footer {
  bottom: 0;
  position: relative;
width: 100%;
left : 0;
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



</style>

</head>
<body>

	
	
        <div class="topnav">
		
    <a href="home.php"><img src="./images/logo.jpg" class="logo"></a>
</div>
<div id="container">

		
		<article>
		<br>
		<br>
		
				
			 <div class="container">
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            
                        </tr>
                       <?php 
                        $user_products_result=mysqli_query($conn,$user_products_query) or die(mysqli_error($conn));
                        $no_of_user_products= mysqli_num_rows($user_products_result);
                        $counter=1;
                       while($row=mysqli_fetch_array($user_products_result)){
                           
                         ?>
                        <tr>
                           
                           
                        </tr>
                       <?php $counter=$counter+1;}?>
                        <tr>
						<?php


                   
					  	   $vat = 8.75;
                $vatToPay = ($vat / 100);
                $tax = ($total_price * $vatToPay);
                $pricetopay = ($total_price + $tax);
					   $upid=$_SESSION['UPID'];
	 $add_to_order_query="insert into temp_order(UPID,total_price,pricetopay,is_completed) values ('$upid','$total_price','$pricetopay','No')";
    $add_to_order_result=mysqli_query($conn,$add_to_order_query) or die(mysqli_error($conn));
					  ?>

                          
                        </tr>
					
                    </tbody>
                </table>
            </div>
            <h2>Payment Options Below</h2>
			<br>
			<br>
			
      
		
	</div>
	</article>
	
	
	
	<div id="smart-button-container">
    <div style="text-align: center"><label for="description"> </label><label for="description"># of Items  </label><input type="text" name="descriptionInput" id="description" maxlength="127" value="<?php echo $no_of_user_products;?>"  disabled="disabled" ></div>
      <p id="descriptionError" style="visibility: hidden; color:red; text-align: center;">Please enter a description</p>
    <div style="text-align: center"><label for="amount"> </label><label for="amount">Total Price  </label><input type="text" name="amountInput" id="amount" value="<?php echo number_format($pricetopay,2)?>" disabled="disabled" ></div>
      <p id="priceLabelError" style="visibility: hidden; color:red; text-align: center;">Please enter a price</p>
    <div id="invoiceidDiv" style="text-align: center; display: none;"><label for="invoiceid"> </label><input name="invoiceid" maxlength="127" type="text" id="invoiceid" value="" ></div>
      <p id="invoiceidError" style="visibility: hidden; color:red; text-align: center;">Please enter an Invoice ID</p>
    <div style="text-align: center; " id="paypal-button-container"></div>
  </div>
  <script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            
            function updateInventory() {
              //a.jax made a http request -> allos to send a message 
                $.ajax({
                  //sends to a specif end point or file
                    url: 'success.php',
                    success: function(data) {
                        location.href = 'successPage.php';
                    },
                    error: function() {
                        location.href = 'errorPage.php';
                    }
                });
            }
  function initPayPalButton() {
    var description = document.querySelector('#smart-button-container #description');
    var amount = document.querySelector('#smart-button-container #amount');
    var descriptionError = document.querySelector('#smart-button-container #descriptionError');
    var priceError = document.querySelector('#smart-button-container #priceLabelError');
    var invoiceid = document.querySelector('#smart-button-container #invoiceid');
    var invoiceidError = document.querySelector('#smart-button-container #invoiceidError');
    var invoiceidDiv = document.querySelector('#smart-button-container #invoiceidDiv');

    var elArr = [description, amount];

    if (invoiceidDiv.firstChild.innerHTML.length > 1) {
      invoiceidDiv.style.display = "block";
    }

    var purchase_units = [];
    purchase_units[0] = {};
    purchase_units[0].amount = {};

    function validate(event) {
      return event.value.length > 0;
    }

    paypal.Buttons({
      style: {
        color: 'silver',
        shape: 'rect',
        label: 'paypal',
        layout: 'vertical',
        
      },

      onInit: function (data, actions) {
        actions.enable();

        if(invoiceidDiv.style.display === "block") {
          elArr.push(invoiceid);
        }

        elArr.forEach(function (item) {
          item.addEventListener('keyup', function (event) {
            var result = elArr.every(validate);
            if (result) {
              actions.enable();
            } else {
              actions.disable();
            }
          });
        });
      },

      onClick: function () {
        if (description.value.length < 1) {
          descriptionError.style.visibility = "visible";
        } else {
          descriptionError.style.visibility = "hidden";
        }

        if (amount.value.length < 1) {
          priceError.style.visibility = "visible";
        } else {
          priceError.style.visibility = "hidden";
        }

        if (invoiceid.value.length < 1 && invoiceidDiv.style.display === "block") {
          invoiceidError.style.visibility = "visible";
        } else {
          invoiceidError.style.visibility = "hidden";
        }

        purchase_units[0].description = description.value;
        purchase_units[0].amount.value = amount.value;

        if(invoiceid.value !== '') {
          purchase_units[0].invoice_id = invoiceid.value;
        }
      },

      createOrder: function (data, actions) {
        return actions.order.create({
          purchase_units: purchase_units,
        });
      },

      onApprove: function (data, actions) {
        //call function
        updateInventory();
        return actions.order.capture().then(function (orderData) {

          // Full available details
          console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
	

          // Show a success message within this page, e.g.
          const element = document.getElementById('paypal-button-container');
          element.innerHTML = ''
          element.innerHTML = '<button onclick="myFunction()" class="signupbtn">Payment Confirmed, Please Continue</button>';
          
          // Or go to another URL:  actions.redirect('thank_you.html');
          
        });
      },

      onError: function (err) {
        console.log(err);
      }
    }).render('#paypal-button-container');
  }
  initPayPalButton();
  </script>
  
  <script>
function myFunction() {
  location.replace("success.php")
}
</script>

			
		

   
	

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