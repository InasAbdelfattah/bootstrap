<?php
include 'categoryclass.php';
include 'subcategoryclass.php';
$cat=new category;
$c=$cat->category();

if(isset($_POST['Add']))
{
	if(!empty(trim($_POST['subcatname']))){
		$subcat=new subcategory;
		$Type_id=$_POST['catname'];
		$scatname=$_POST['subcatname'];
		$subcat->insert($scatname,$Type_id);
	}
}

include 'header1.php';
?>
<form action="addSubcategory.php" method="post">	
<div id="inside">
	<div class="container">
	<div class="row">
    <table class="table table-bordered table-hover table-striped table-responsive">
		<tr><th colspan="2"><h2>Add new subcategory</h2></th></tr>
		<tr>
			<th>category name</th>

			<td><select name="catname">
			<?php 
			foreach ($c as $key => $value) {
				$cat_id=$value['tid'];
				$name=$value['name'];
			echo "<option value='$cat_id'>$name</option> ";
		}
				?>
			</select></td>
		</tr>
		<tr>
			<th>subcategory name</th>
			<td><input type="text" name="subcatname"/></td>
		</tr>
		<tr>
			<th colspan="2"><input type="submit" name="Add" value="Add" class = "btn btn-default btn-lg btn-block"></th>
			<!--<td id="submit"></td>-->
		</tr>
	</table>
</div>	
</form>
<br/>
<br/>
<table class="table table-bordered table-hover table-striped table-responsive">
<tr><th colspan="3"><h2>All subcategories</h2></th></tr>
<?php
	
	$subcateg=new subcategory;
	$c=$subcateg->subcategory();

	//echo "<table id='items'>";
	foreach ($c as $key => $value) {
		$name=$value['name'];
?>
	<tr>
			<td><?php echo $name; ?></td>
			<td><a href="editSubcategory.php?id=<?php echo $value['id']; ?>">edit</a></td>
			<td><a href="removeSubcategory.php?id=<?php echo $value['id']; ?>">delete</a></td>
	</tr>
	

<?php
}
echo "</table></div></div>";
include 'Afooter.php';
?>

