<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
<div class="row-fluid">
<?php include('school_year_sidebar.php'); ?>
<div class="span3" id="adduser">
<?php include('edit_school_year_form.php'); ?>		   			
</div>
<div class="span6" id="">
<div class="row-fluid">
<!-- block -->
<div id="block_bg" class="block">
<div class="navbar navbar-inner block-header">
<div class="muted pull-left">School Year List</div>
</div>
<div class="block-content collapse in">
<div class="span12">
<form action="delete_sy.php" method="post">
<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
<a data-toggle="modal" href="#class_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
<?php include('modal_delete.php'); ?>
<thead>
<tr>
<th></th>
<th>School Year </th>
<th></th>
</tr>
</thead>
<tbody>
<?php
$sy_query = mysqli_query($conn,"select * from school_year")or die(mysqli_error());
while($sy_row = mysqli_fetch_array($sy_query)){
$id = $sy_row['school_year_id'];
?>

<tr>
<td width="30">
<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
</td>
<td><?php echo $sy_row['school_year']; ?></td>
<td width="40"><a href="edit_school_year.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i> </a></td>


</tr>
<?php } ?>


</tbody>
</table>
</form>
</div>
</div>
</div>
<!-- /block -->
</div>


</div>
</div>
<?php include('footer.php'); ?>
</div>
<?php include('script.php'); ?>
</body>

</html>