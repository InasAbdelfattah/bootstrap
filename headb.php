<?php
include 'products.php';
$products= new Product();
$Types=$products->Types();
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
    <i class="fa fa-shopping-cart"></i> <a href="cartb.php">Shopping Cart&nbsp;</a> <b style="font-size:10px;">(4) </b></div>
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
            <li><a href="checkout.php">check out</a></li>
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
   <!-- <ol class="breadcrumb"><li><a href="#">Apparel &amp; Accessories</a></li><li class="active">Handbags</li></ol>
  </div>-->
  <div class="row">
    <!-- Search Start -->
    <div class="col-md-3">
      <h4>Search <a id="show-search-menu" href="#" style="float:right;margin-right:20px ;font-size:13px"><span class="fa fa-chevron-down hidden-lg hidden-md"></span></a></h4>
      
<div class="well hidden-xs hidden-sm" id="search-menu"> 
  
 <form class="form-inline">
  <div class="form-group" style="margin-top:6px;margin-bottom:6px;">
    <label for="exampleInputName2">Category:</label>
    <!--<select class="form-control" style="width:90%;">-->
    <select  class="form-control" style="width:90%;" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
      <?php foreach ($Types as $key => $type) {
        # code...
      ?>

        <option value="selectedType.php?type=<?php echo $type['type']; ?>"><?php  echo $type['type']?></option>
      <?php } ?>     
      </select>
  </div>

</form>
 <form role="form" action="selectedType.php" method="get">
   <div class="form-group" style="margin-top:6px;margin-bottom:6px;">
    <label for="exampleInputEmail2">Keywords:</label>
    <input style="width:90%" class="form-control" name="type" id="exampleInputEmail2" placeholder="Looking for...">
    <br>   
   <button type="submit" class="btn btn-default">Search</button>
  </div>
  
 
  </form>

</div>
  <!-- Search End -->
      <div class="categories-menu row">
        <h4>Categories  <a id="show-categories-menu" href="#" style="float:right;margin-right:20px;font-size:13px"><span class="fa fa-chevron-down hidden-lg hidden-md"></span></a></h4>        

        <div id="categories-menu-content" class="hidden-xs hidden-sm">
            <?php foreach ($Types as $key => $type) {
              # code...
             ?>
            <div class="col-md-12 col-sm-4  col-xs-12" style="border-bottom:1px solid #EFEFEF;padding-top:4px;padding-bottom:4px;">
               <a href="selectedType.php?type=<?php echo $type['type']; ?>"> <?php echo $type['type']; ?></a>
          
              <!--Apparel &amp; Accesories (29)-->
            </div> 
            <?php } ?>
            
           
            
        </div>
      </div>
    </div>
    <div class="col-md-9">
      <div class="row">
        <div class=" col-sm-4 hidden-xs">
         <!-- <div class="btn-group sort-group">
									<button class="btn btn-default no-action">Sort by:</button>
									<button class="btn btn-default btn-sort active" type="Submit" name="SortBy" value="1"><i class="fa fa-sort-numeric-asc"></i></button>
									<button class="btn btn-default btn-sort " type="Submit" name="SortBy" value="2"><i class="fa fa-sort-numeric-desc"></i></button>
								</div>-->
        </div>
		
 
	
	
		
		<!-- Products End -->
	