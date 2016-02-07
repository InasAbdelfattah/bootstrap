<?php
		include 'headb.php';
		//include 'products.php';
		$product=new Product;
		$p=$product->product();
		//echo "<pre>"; print_r($p); echo "</pre>";
?>
     
		<div class=" col-sm-4">
          <div class="btn-group sort-group pagination  top-pagination" style="margin-top:0px;margin-bottom:0px;">
		
		<button class="btn btn-default no-action disabled">«</button>
		
		<button class="btn btn-default btn-sort active" type="Submit" name="wp" value="1">1</button>
		
		<button class="btn btn-default btn-sort " type="Submit" name="wp" value="2">2</button>
		
		<button class="btn btn-default btn-sort " type="Submit" name="wp" value="3">3</button>
		
		<button class="btn btn-default btn-sort " type="Submit" name="wp" value="4">4</button>
		
		<button class="btn btn-default btn-sort" type="Submit" name="wp" value="2">»</button>
		
	</div>
		</div>
        <div class="col-sm-4  hidden-xs">
          <div class="input-group pull-right">
				<div class="input-group-addon">Result per Page</div>
				<select class="form-control" style="width:60px">
					<option>10 </option>
					<option>20 </option>
					<option>30 </option>
					<option>40 </option>
					<option>50 </option>
				</select>
			</div>
        </div>
      </div>
      <div class="row product-list">
		<!-- Products Begin -->
	<?php
			foreach ($p as $key => $product) {
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
        ?>

<?php
include 'footb.php';
?>