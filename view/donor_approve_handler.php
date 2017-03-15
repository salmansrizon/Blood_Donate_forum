<?php include("../data/dbcon.php"); ?>

<?php 
	$id = $_GET['donor_approve'];

	$sql1 = "UPDATE login SET type=1,approved=1 WHERE login_id=$id";
	$result1=mysqli_query(get_db_connection(),$sql1);
	if($result1)
	{
		echo "<script>window.open('donor_approve.php?Donor_Approve= Donor_Request Approve!!','_self')</script>";
	}
?>