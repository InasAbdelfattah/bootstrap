<?php
include 'categoryclass.php';
$id=$_GET['id'];
//echo $id;
	$categ=new category;
	//$name=$categ->getcategory($id);
	//print_r($name) ;
/*if(isset($_POST['save']))
{
	$cat_id=$_POST['cat_id'];
	$categ->name=$_POST['catname'];
	$categ->update($cat_id);
}*/

include 'header1.php';
?>
<div id="inside">
	<div class="container">
	<div class="row">
<form action="updatecat.php" method="post">	
<input type='hidden' name='cat_id' value='<?php echo $id; ?>'/>
<br/><br/><br/>
<table class="table table-bordered table-hover table-striped table-responsive">
<!-- 		<tr>
			<th>category name</th>

			<td><select name="category_name" >
				 		<?php
				/*$c=$categ->category();
				foreach ($c as $key => $value) {
				$name=$value['name'];*/
			?> 
				<option value=""><?php //echo $name; ?></option>
			
			</select></td>
		</tr> -->
			
		<tr>
			<th>new name</th>
			<td><input type="text" name="catname"/></td>
		</tr>
		<tr>
			<td></td>
			<td id="submit"><input type="submit" name="save" value="Add" ></td>
		</tr>
	</table>
</div>	
</form>
</div>
</div>
</div>
<br/><br/><br/><br/><br/>
<?php

include 'Afooter.php';
?>