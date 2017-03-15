<?php
 include '../data/dbcon.php';
?>

<?php 
	$id = $_GET['del'];

	$query = "DELETE FROM request WHERE ID=$id";
	$result= mysqli_query(get_db_connection(), $query);
	
	
	if($result)
	{
		echo "<script>window.open('admin_req_list.php?delete=Data has been deleted!!','_self')</script>";
	}
?>