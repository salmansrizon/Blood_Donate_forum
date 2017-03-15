<?php	
	session_start();
?>
<html>
  <head>
	<title>Blood Donation</title>
	<style>

	
     #log{
		 width: 400px;
		 box-shadow: 0px 0px 31px #888;
        margin-top: 200px;
		margin-bottom: 350px;
		border-radius: 3px;
		
	 }
	 	 input[type=submit] {
    width: 20%;
    background-color: #b70e13;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}


    </style>
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
$(document).ready(function(){

    $("#Admin").click(function(){
        $("#admin").show();
		$("#donor").hide();
    });
	$("#Donor").click(function(){
        $("#donor").show();
		$("#admin").hide();
    });
});
</script>
  </head>
<body>

<!------------------------------header from header.php------------------------>
<?php include("header.php");?>


<!-------------------------LOG IN form----------------------------->
<center>
<div id="log" >
<h2 style="background-color:black;color:#b70e13;padding: 13px;border-radius: 3px;">LOG IN</h2>
	<form>

				<input type="radio" id="Donor" name="regtable"  checked="checked" value="Donor login"/>Donor login
				<input type="radio" id="Admin" name="regtable" value="Admin login" />Admin login

	</form>

 <form action="login.php" method="post" id="donor" >
  <span>USER NAME:</span>
          <input type="text" name="name" style="width: 50%;padding: 5px;margin: 8px 0px;border: 1px solid #CCC;border-radius: 4px;">
  <br><br>
   <span>PASSWORD:</span>
          <input type="password" name="pass" style="width: 50%;padding: 5px;margin: 8px 0px;border: 1px solid #CCC;border-radius: 4px;">
  <br><br>
  
       <input  type="submit" name="submit"  value="LOGIN"/>

</form> <br>
 <form action="login.php" method="post" id="admin" style="display: none;">
  <span>USER NAME:</span>
          <input type="text" name="name2" style="width: 50%;padding: 5px;margin: 8px 0px;border: 1px solid #CCC;border-radius: 4px;">
  <br><br>
   <span>PASSWORD:</span>
          <input type="password" name="pass2" style="width: 50%;padding: 5px;margin: 8px 0px;border: 1px solid #CCC;border-radius: 4px;">
  <br><br>
  
       <input  type="submit" name="submit2"  value="LOGIN"/>

</form> <br>
</div>
</center>
 <div style="clear:both;"></div>
</div>


<!------------------------------footer from footer.php------------------------>
<?php include("footer.php");?>


</body>
</html>

<?php include("../data/dbcon.php"); ?>

<?php
    if(isset($_POST['submit']))
	{
		$usern = $_POST['name'];
		$passwo = $_POST['pass'];
		$query ="SELECT * FROM donorreg WHERE USERNAME='$usern' and PASSWORD='$passwo'";
	
		$result = mysqli_query(get_db_connection(), $query);
		if(mysqli_num_rows($result)>0)
		{
			$_SESSION['name']=$usern;
			echo "<script>window.open('donor_login.php','_self')</script>";
		}
		else
		{
			echo "<script>alert('Invalid username or password!')</script>";
		}

	}



	if(isset($_POST['submit2']))
	{
		$user = $_POST['name2'];
		$password = $_POST['pass2'];
		$query ="SELECT * FROM login WHERE username='$user' and password='$password'";
	
		$result = mysqli_query(get_db_connection(), $query);
		if(mysqli_num_rows($result)>0)
		{
			$_SESSION['name2']=$user;
			echo "<script>window.open('admin_login.php','_self')</script>";
		}
		else
		{
			echo "<script>alert('Invalid username or password!')</script>";
		}

	}

?>
