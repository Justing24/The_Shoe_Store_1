 <?php
 echo "<div class='card'>
    <form method='post' action=''>
    <input type='hidden' name='INID' value=".$row['INID']." />
	<input type='hidden' name='qty_on_hand' value=".$row['qty_on_hand']." />
    <div class='image'><a href='viewpage.php?INID=".$row['INID']."'/><img width=40% src='./images/".$row['image']."'/></a>", " </div>
    <div class='name'>".$row['name']."</div>
	<div class='size'>Size: ".$row['size']."</div>
    <div class='price'>$".$row['price']."</div>
    <button type='submit' class='buy'>Buy Now</button>
    </form>
    </div>";
	
	
?>