<?php
	session_start();
	include 'products.php';
	include'user.php';
	include 'order.php';
	 $order = new Order();// it will be deleted when in line 15
	$_SESSION['uid']=2;	
	if(isset($_SESSION['uid']))
    {
    if(isset($_GET['id']))
  	{	
      $user=new user($_SESSION['uid']);
      $totalPrice=$order->OrdersPrice($_SESSION['uid']);      
      $product = new Product($_GET['id']);
      $order = new Order();
      $reminder=$user->credite - ($totalPrice['sum'] + $product->price) ;
      if($reminder>=0)
      {	
      	$order->user_id=$_SESSION['uid'];
      	$order->num_items = $order->num_items + 1;
      	$order->desc= $product->descr;
        $order->total_price=$product->price; 
      	$order->pid=$_GET['id'];
      	$order->insert();	
      	// $Q=$product->quantity - $_session['quentity'];
      	$Q=$product->quantity - 1;
      	$product->updateQ($Q);
        $totalPrice=$order->OrdersPrice($_SESSION['uid']);
        $_SESSION['sum']=$totalPrice['sum'];
      } 
      else
      {
        //make pop up window to show that user don`t have enough credite
        echo "<script>alert('sorry,You don\'t have enough credit.')</script>";
      } 		
  	}
  	$demand=$order->userOrder($_SESSION['uid']);
    //updateCart(count($demand));
  }

?>
	 
<html>
	<head>
		<title>Shopping Cart</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="css/custom.css"/>		
	</head>

	<body>
		
		<nav class="navbar">
			<div class="container">
				<a class="navbar-brand" href="#">Your online store</a>
				<div class="navbar-right">
					<div class="container minicart"></div>
				</div>
			</div>
		</nav>
		
		<div class="container-fluid breadcrumbBox text-center">
			<ol class="breadcrumb">
				<li><a href="#">Review</a></li>
				<li class="active"><a href="#">Order</a></li>
				<li><a href="checkout.php">Payment</a></li>
			</ol>
		</div>
		
		<div class="container text-center">

			<div class="col-md-5 col-sm-12">
				<div class="bigcart"></div>
				<h1>Your shopping cart</h1>
				<p>
				</p>
			</div>
			
			<div class="col-md-7 col-sm-12 text-left">
				<ul>
					<li class="row list-inline columnCaptions">
						<span>QTY</span>
						<span>ITEM</span>
						<span>Price</span>
					</li>
					<?php foreach ($demand as $key => $order) {  ?>
					<li class="row">
						<span class="quantity">1</span>
						<span class="itemName"><?php echo $order['name']?></span>
						<span class="popbtn"><a class="arrow"></a></span>
						<span class="price"><?php echo $order['price']?></span>
					</li>
					<?php 
						} 
					?>
					</ul>
					
				</ul>
			</div>

		</div>

		<!-- The popover content -->

		<div id="popover" style="display: none">
			<a href="deleteProductFromCart.php"><span class="glyphicon glyphicon-pencil"></span></a>
			<a href="#"><span class="glyphicon glyphicon-remove"></span></a>
		</div>
		
		<!-- JavaScript includes -->

		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> 
		<script src="js/bootstrap.min.js"></script>
		<script src="js/customjs.js"></script>

	</body>
</html>