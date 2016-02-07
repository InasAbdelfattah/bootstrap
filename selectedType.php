<!--select by sub type directly from product table-->
<?php	
include 'headb.php';
//include 'products.php'; 
$product=new Product;
$price=[];
$type=[];
//drop box
if(isset($_GET['type']))
{	
	$type=$product->productByType($_GET['type']);
}
if (isset($_GET['price'])) 
{
	$price=$product->productByPrice($_GET['price']); 
	
}
echo "<div id='items'>";
if(count($price)>0)
{
	
?>
	<!--main div-->
	<!--- display item details to add it to user cart-->
	 <div class="row product-list">
		<!-- Products Begin -->
	<?php
			//foreach ($p as $key => $product) {
			foreach ($price as $key => $product) 
			{
		?>
		<div class="col-sm-3 col-xs-6">
        	<div class="product">
            	<div class="product-info">
					<button type="submit" name="imageSubmit" value="btn_was_clicked"><img src=<?php echo $product['image'];?> class="img-responsive tb-center tb-maxheight-115 tb-maxwidth-115" alt="..."></button>
	                <p class="primary-font">
						<?php  echo $product['name'];?>
	                </p>
	                <p class="text-muted"><span class="price">$<?php echo $product['price']; ?></span><br /></p>
					
	            </div>
				<div class="btn-group product-action">
				
 				<!--<button type="submit" id ='add'  name="Add to cart" class="btn btn-primary cart-btn"><i class="fa fa-shopping-cart">-->
 				<a href="cartb.php?id=<?php echo $product['pId'];?>" class="btn btn-info" role="button">Add to cart</a>
				<!--Place Order
				
				</button>-->
				</div>
			</div>
        </div>
       

<?php
	}
}
if(count($type)>0)
{
	foreach ($type as $key => $product) 
	{
	?>
	<div class="col-sm-3 col-xs-6">
        	<div class="product">
            	<div class="product-info">
					<button type="submit" name="imageSubmit" value="btn_was_clicked"><img src=<?php echo $product['image'];?> class="img-responsive tb-center tb-maxheight-115 tb-maxwidth-115" alt="..."></button>
	                <p class="primary-font">
						<?php  echo $product['name'];?>
	                </p>
	                <p class="text-muted"><span class="price">$<?php echo $product['price']; ?></span><br /></p>
					
	            </div>
				<div class="btn-group product-action">
				
 				<!--<button type="submit" id ='add'  name="Add to cart" class="btn btn-primary cart-btn"><i class="fa fa-shopping-cart">-->
 				<a href="cartb.php?id=<?php echo $product['pId'];?>" class="btn btn-info" role="button">Add to cart</a>
				<!--Place Order
				
				</button>-->
				</div>
			</div>
        </div>
		
	<?php
	}
}
	echo "</div>";
	include'footb.php';
?>