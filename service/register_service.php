<?php include("../data/dbcon.php"); ?>

<?php
	function donor_register($fullname,$email,$bloodgroup,$district,$gender,$date,$contactno){
		$query = "INSERT INTO donorreg(fullname,email,bloodgroup,district,gender,last_donate_date,contactno) 
		      VALUES('$fullname','$email','$bloodgroup','$district','$gender',$date,$contactno)";
		return mysqli_query(get_db_connection(), $query);
	}

	function remove_donor_register($id){
		$query = "DELETE FROM donorreg WHERE ID=$id";
		return mysqli_query(get_db_connection(), $query);
	}
		function get_all_donor_register(){
		$query = "SELECT *FROM donorreg";
		return mysqli_query(get_db_connection(), $query);
	}
	function get_donor_by_id($id){
	$query = "SELECT * FROM donorreg WHERE ID=$id";
		return mysqli_query(get_db_connection(), $query);
	}
	function approve_donor_register($id,$username, $password)
	{
		$query = "INSERT INTO login (username, password)VALUES('$username','$password')SELECT USERNAME, PASSWORD FROM donerreg where ID='$id';";
		return mysqli_query(get_db_connection(), $query);
	}
?>