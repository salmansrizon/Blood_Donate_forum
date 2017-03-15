<?php include("../data/dbcon.php"); ?>

<?php 
	$id = $_GET['approve'];
	$sql = "UPDATE request SET approved=1 WHERE id=$id";
	$result=mysqli_query(get_db_connection(),$sql);
	if($result)
	{
		echo "<script>window.open('admin_req_list.php?Approve=Request Approve!!','_self')</script>";
	}
?>