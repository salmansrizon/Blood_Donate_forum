<?php include("../service/register_service.php"); ?>

<?php 
	$id = $_GET['del'];
	$result = remove_donor_register($id);
	if($result)
	{
		echo "<script>window.open('view_details.php?delete=Data has been deleted!!','_self')</script>";
	}
?>