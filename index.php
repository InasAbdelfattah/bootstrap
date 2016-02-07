<?php
	include 'products.php';
	$product = new Product();
	$newProducts=$product->Newproduct();

 ?>
<html>
	<head>
	<link rel="stylesheet" href="css/bootstrap.css" />
	<link rel="stylesheet" href="css/mystyle.ccs" />
		<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/indexboot.js"></script>	
	</head>
	<body>
<nav class="navbar-fixed-top navbar-default navbar">
  <div class="row header">
    <div class="pull-right" style="font-size:13px; font-family:Verdana;color:#666666">
    <i class="fa fa-bank"></i> <!--Points (200)&nbsp;&nbsp;&nbsp;--> 
    <i class="fa fa-shopping-cart"></i> <a href="shoppingCart.php">Shopping Cart&nbsp;</a> <b style="font-size:10px;">(4) </b></div>
  </div>

		
  <div class="row menu">
    <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
      <img src="http://s2.postimg.org/fpyp99z45/RM2.jpg" style="margin-left:37px;height:45px;margin-right:20px">
        </div>
		
<div class="container">
	<div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="allproductb.php">Products</a></li>
            <li><a href="myAccount.php">My account</a></li>
            <li><a href="cartb.php">shopping cart</a></li>
            <li><a href="checkout.php">check out</a></li>z
            <li><a href="registration.php">Sing up</a></li>
            <li><a href="login.php">Sing in</a></li>
          </ul>
        </div>
    </div>
  </div>
</nav>
<div class="container" style="margin-top:120px;">
  <div class="row">
	<!-- Title -->
  <!--  <ol class="breadcrumb"><li><a href="#">Apparel &amp; Accessories</a></li><li class="active">Handbags</li></ol>
  </div>
  <div class="row">-->
    <!-- Search Start -->
    <div class="col-md-3">
      <h4>Search <a id="show-search-menu" href="#" style="float:right;margin-right:20px ;font-size:13px"><span class="fa fa-chevron-down hidden-lg hidden-md"></span></a></h4>
      
<div class="well hidden-xs hidden-sm" id="search-menu"> 
  
 <form class="form-inline">
  <div class="form-group" style="margin-top:6px;margin-bottom:6px;">
    <label for="exampleInputName2">Category:</label>
    <select class="form-control" style="width:90%;">
        <option>Handbags</option>
        <option>Facial Accesories</option>
      </select>
  </div>
  
   <div class="form-group" style="margin-top:6px;margin-bottom:6px;">
    <label for="exampleInputEmail2">Keywords:</label>
    <input style="width:90%" class="form-control" id="exampleInputEmail2" placeholder="Looking for...">
  </div>
  
  <button type="submit" class="btn btn-default">Search</button>
</form>

</div>
  <!-- Search End -->
      <div class="categories-menu row">
        <h4>Categories  <a id="show-categories-menu" href="#" style="float:right;margin-right:20px;font-size:13px"><span class="fa fa-chevron-down hidden-lg hidden-md"></span></a></h4>        

        <div id="categories-menu-content" class="hidden-xs hidden-sm">
            <div class="col-md-12 col-sm-4  col-xs-12" style="border-bottom:1px solid #EFEFEF;padding-top:4px;padding-bottom:4px;">
              Apparel &amp; Accesories (29)
            </div> 
            <div class="col-md-12 col-sm-4  col-xs-12" style="border-bottom:1px solid #EFEFEF;padding-top:4px;padding-bottom:4px;">
              Electronics (142)
            </div> 
            <div class="col-md-12 col-sm-4  col-xs-12" style="border-bottom:1px solid #EFEFEF;padding-top:4px;padding-bottom:4px;">
              Home &amp; Garden (386)
            </div> 
            <div class="col-md-12 col-sm-4  col-xs-12" style="border-bottom:1px solid #EFEFEF;padding-top:4px;padding-bottom:4px;">
              Personal Care (10)
            </div>
          <div class="col-md-12 col-sm-4  col-xs-12" style="border-bottom:1px solid #EFEFEF;padding-top:4px;padding-bottom:4px;">
              Tools (14)
            </div>
           <div class="col-md-12 col-sm-4  col-xs-12" style="border-bottom:1px solid #EFEFEF;padding-top:4px;padding-bottom:4px;">
              Office (44)
            </div>
            <div class="col-md-12 col-sm-4  col-xs-12" style="border-bottom:1px solid #EFEFEF;padding-top:4px;padding-bottom:4px;">
              Apparel &amp; Accesories (29)
            </div> 
            <div class="col-md-12 col-sm-4  col-xs-12" style="border-bottom:1px solid #EFEFEF;padding-top:4px;padding-bottom:4px;">
              Electronics (142)
            </div> 
            <div class="col-md-12 col-sm-4  col-xs-12" style="border-bottom:1px solid #EFEFEF;padding-top:4px;padding-bottom:4px;">
              Home &amp; Garden (386)
            </div> 
            <div class="col-md-12 col-sm-4  col-xs-12" style="border-bottom:1px solid #EFEFEF;padding-top:4px;padding-bottom:4px;">
              Personal Care (10)
            </div>
          <div class="col-md-12 col-sm-4  col-xs-12" style="border-bottom:1px solid #EFEFEF;padding-top:4px;padding-bottom:4px;">
              Tools (14)
            </div>
           <div class="col-md-12 col-sm-4  col-xs-12" style="border-bottom:1px solid #EFEFEF;padding-top:4px;padding-bottom:4px;">
              Office (44)
            </div>
            <div class="col-md-12 col-sm-4  col-xs-12" style="border-bottom:1px solid #EFEFEF;padding-top:4px;padding-bottom:4px;">
              Apparel &amp; Accesories (29)
            </div> 
            <div class="col-md-12 col-sm-4  col-xs-12" style="border-bottom:1px solid #EFEFEF;padding-top:4px;padding-bottom:4px;">
              Electronics (142)
            </div> 
            <div class="col-md-12 col-sm-4  col-xs-12" style="border-bottom:1px solid #EFEFEF;padding-top:4px;padding-bottom:4px;">
              Home &amp; Garden (386)
            </div> 
            <div class="col-md-12 col-sm-4  col-xs-12" style="border-bottom:1px solid #EFEFEF;padding-top:4px;padding-bottom:4px;">
              Personal Care (10)
            </div>
          <div class="col-md-12 col-sm-4  col-xs-12" style="border-bottom:1px solid #EFEFEF;padding-top:4px;padding-bottom:4px;">
              Tools (14)
            </div>
           <div class="col-md-12 col-sm-4  col-xs-12" style="border-bottom:1px solid #EFEFEF;padding-top:4px;padding-bottom:4px;">
              Office (44)
            </div>
        </div>
      </div>
    </div>
    <div class="col-md-9">
      <div class="row">
        <div class=" col-sm-4 hidden-xs">
          <div class="btn-group sort-group">
									<button class="btn btn-default no-action">Sort by:</button>
									<button class="btn btn-default btn-sort active" type="Submit" name="SortBy" value="1"><i class="fa fa-sort-numeric-asc"></i></button>
									<button class="btn btn-default btn-sort " type="Submit" name="SortBy" value="2"><i class="fa fa-sort-numeric-desc"></i></button>
								</div>
        </div>
		
      
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
			foreach ($newProducts as $key => $product) {
		?>
		<div class="col-sm-3 col-xs-6">
        	<div class="product">
            	<div class="product-info">
					<button type="submit" name="imageSubmit" value="btn_was_clicked"><img src=<?php echo $product['image'];?> class="img-responsive tb-center tb-maxheight-115" alt="..."></button>
	                <p class="primary-font">
						<?php  echo $product['name'];  ?>
	                </p>
	                <p class="text-muted"><span class="price">$<?php echo $product['price']; ?></span><br /></p>
					
	            </div>
				<div class="btn-group product-action">
				
 				<button type="submit" name="Add to cart" class="btn btn-primary cart-btn"><i class="fa fa-shopping-cart">
				</i>
				
				Place Order
				
				</button>
				</div>
			</div>
        </div>
        <?php 
        	} 
        ?>
		
		<!-- Products End -->
	</div>
	</div>
    
  </div>
  
</div>
</body>
</html>