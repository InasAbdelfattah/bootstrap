<?php
include 'header1.php';
include '../products.php';
//include 'body2.php';

?>
<div id="inside">
	<div class="container">
	<div class="row">
<div id="items">

<?php
	$dis=new product;
	$d=$dis->product();

	foreach ($d as $key => $product) {
		$pimg=$product['image'];
?>

		<div class="item">
			<img src="../<?php echo $pimg; ?>" width="213" height="192" />
			<div>
			<span class="price">$<?php echo $product['price']." |"; ?></span><span><?php  echo " ".$product['name'];  ?></span>
			<a href="editpronew.php?id=<?php echo $product['pId']; ?>&name=<?php echo $product['name']; ?>">edit</a>
			<a href="removeProduct.php?id=<?php echo $product['pId']; ?>">delete</a>
			</div>
		</div>
		 
	



<?php
}
echo "</div></div></div></div>";
include 'Afooter.php';
?>