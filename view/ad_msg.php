<?php include("../service/register_service.php"); ?>




<html>
  <head>
	<title>Blood Donation</title>
	<style>

	
     #log{
		 width: 800px;
		 box-shadow: 0px 0px 31px #888;
        margin-top: 50px;
		margin-bottom: 350px;
		border-radius: 3px;
	 }
	 input[type=text],select
	 {
		 width: 50%;padding: 5px;margin: 8px 0px;border: 1px solid #CCC;border-radius: 4px;
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
	 .error {color: #FF0000;}


    </style>
  </head>
<body>


<!------------------------------header from header.php------------------------>
<?php include("admin_login.php");?>


<!------------------------------Register form------------------------>
<?php
$id = $_GET['msg'];
$result = get_donor_by_id($id);
$row = mysqli_fetch_assoc($result);	
$fullname = $row['FULLNAME'];
$msg = $row['message'];
?>


<center>
<div id='log' >
<h2 style='background-color:black;color:#b70e13;padding: 13px;border-radius: 3px;'>MESSAGE</h2>

 <form method='post' action=''>
  FULL NAME:&nbsp;&nbsp;&nbsp;&nbsp;
          <input type='text' name='fname' value="<?=$fullname?>">
  <br><br>

 MESSAGE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <textarea name="message"rows="5" cols="45"></textarea>
		   <input type='hidden' name='id' value="<?=$id?>">
  <br><br>
  
  
       <input   type='submit' name='send' value='Message Send'/>

</form> <br>




 <div style="clear:both;"></div>
</div>
</div>
</center>



<!------------------------------footer from footer.php------------------------>
<?php include("footer.php");?>



</body>
</html>
<?php 
   // include("../data/dbcon.php"); 
	if(isset($_POST['send'])){
	    $id=$_POST['id'];
		$fullname = $_POST['fname'];
		$msg = $_POST['message'];
		
		
	    $sql = "UPDATE donorreg SET message='$msg' WHERE ID='$id'";

	if(mysqli_query(get_db_connection(),$sql))
	{
		echo "<script>window.open('admin_msg.php?msg=message send','_self')</script>";
		
	}
	}
	
?>