<?php
include 'categoryclass.php';
if(isset($_POST['Add']))
{
	if(!empty(trim($_POST['catname']))){
		$name=$_POST['catname'];
		$categ=new category;
		$categ->insert($name);
	}
}

include 'header1.php';
?>
<form action="addcategory.php" method="post">	
<div id="inside">
	<div class="container">
	<div class="row">
    <table class="table table-bordered table-hover table-striped table-responsive">
		<tr><th colspan="2"><h2>Add new category</h2></th></tr>

		<tr>
			<th>category name</th>
			<td><input type="text" name="catname"/></td>
		</tr>
		<tr>
			<td></td>
			<td id="submit"><input type="submit" name="Add" value="Add" ></td>
		</tr>
	</table>

</form>
<br/>
<br/>
<table class="table table-bordered table-hover table-striped table-responsive">
<tr><th colspan="3"><h2>All categories</h2></th></tr>

<?php
	
	$categ=new category;
	$c=$categ->category();

	
	foreach ($c as $key => $value) {
		$name=$value['name'];
?>
	<tr>
			<td><?php echo $name; ?></td>
			<td><a href="editcategory.php?id=<?php echo $value['tid']; ?>">edit</a></td>
			<td><a href="removecategory.php?id=<?php echo $value['tid']; ?>">delete</a></td>
	</tr>

<?php
}
echo "</table></div></div></div>";
	
include 'Afooter.php';
?>
</table>