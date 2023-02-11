<?php


require 'header2.php';

?>

<?php

require 'header1.php';


?>
<div id="container">

		<main id="center" class="column">
		<article>
		

			<?php

 
           
 $query = "SELECT *FROM inventory WHERE gender='F'";
 $result = mysqli_query($conn, $query);

 while ($row = mysqli_fetch_assoc($result)) {
	 
 

   require 'items.php';
        }
mysqli_close($conn);
?>
<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>


</article>

</main>
<?php
 
 require 'sidebar.php'
 
 ?>
		


	<nav id="left" class="column">
			<a href="index.php"><img src="./images/sidebar-image-sale.jpg" class="logo1"></a>
		</nav>

	</div>

  <!-- Footer -->
 <footer class="footer-distributed">
 
 <div class="footer-left">
 
 <h3>The Shoe Store</h3>
 
 <p class="footer-links">
 <a href="home.php">Home</a>
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
