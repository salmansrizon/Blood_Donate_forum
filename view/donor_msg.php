<?php include("../service/register_service.php"); ?>
<html>
  <head>
	<title>Blood Donation</title>
	<style>

	
     #log{
		 width: 80%;
		 box-shadow: 0px 0px 31px #888;
        margin-top: 100px;
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
  </head>
<body>

<!------------------------------header from header.php------------------------>
<?php include("donor_login.php");?>



<!-------------------------Show Data----------------------------->
<center>
<div id="log" >



<h1>MESSAGE</h1>



<?php
$name=$_SESSION['name'];
	$result = "SELECT message FROM `donorreg` WHERE USERNAME='$name' ";
$run=mysqli_query(get_db_connection(), $result);	
	while($data3 = mysqli_fetch_assoc($run)){	
	$user_msg=$data3['message'];
	
	echo 'ADMIN: '.$user_msg.'';
	}
	
?>
</br></br>
 <form method='post' action=''>
<?php echo $_SESSION['name'];?>: <textarea name="msg"rows="5" cols="45"></textarea>
</br></br>
<input type="submit" name="reply" value="REPLY MSG">


</form> <br>


</div>
</center>
 <div style="clear:both;"></div>
</div>


<!------------------------------footer from footer.php------------------------>
<?php //include("footer.php");?>


</body>
</html>

<?php 
   
	if(isset($_POST['reply'])){
	    
		$msg = $_POST['msg'];
		
		$name=$_SESSION['name'];
	$sql = "UPDATE donorreg SET reply_message='$msg' WHERE USERNAME='$name' ";

	if(mysqli_query(get_db_connection(),$sql))
	
		echo "<script>window.open('donor_msg.php?msg=Message send!','_self')</script>";
	
	}
	
?>