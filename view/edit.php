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
$id = $_GET['edit'];
$result = get_donor_by_id($id);
$row = mysqli_fetch_assoc($result);	
$fullname = $row['FULLNAME'];
$email = $row['EMAIL'];
$bloodgroup = $row['BLOODGROUP'];
$district = $row['DISTRICT'];
$ldate=$row['LAST_DONATE_DATE'];
$gender = $row['GENDER'];

$contactno = $row['CONTACTNO'];
?>

<?php 
   // include("../data/dbcon.php"); 
	if(isset($_POST['update'])){
	    $id=$_POST['id'];
		$fullname = $_POST['fname'];
		$email = $_POST['email'];
		$bloodgroup = $_POST['bloodgroup'];
		$district = $_POST['district'];
		$gender = $_POST['gender'];
		$ldate = $_POST['ddate'];
		$contactno = $_POST['contact'];
		
		
	    $sql = "UPDATE donorreg SET FULLNAME='$fullname',EMAIL='$email',
		BLOODGROUP='$bloodgroup',DISTRICT='$district', GENDER='$gender',LAST_DONATE_DATE='$ldate',CONTACTNO='$contactno' WHERE ID='$id'";

	if(mysqli_query(get_db_connection(),$sql))
	{
		echo "<script>window.open('view_details.php?Edit=Data has been updated!','_self')</script>";
	}
	}
	
?>
<center>
<div id='log' >
<h2 style='background-color:black;color:#b70e13;padding: 13px;border-radius: 3px;'>REGISTER</h2>

 <form method='post' action=''>
  FULL NAME:&nbsp;&nbsp;&nbsp;&nbsp;
          <input type='text' name='fname' value="<?=$fullname?>">
  <br><br>

  EMAIL:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type='text' name='email' value="<?=$email?>" >
  <br><br>
  BLOOD GROUP:
   <select name='bloodgroup'  value="<?=$bloodgroup?>">
		  <option value='A(Positive)' <?php if($bloodgroup=='A(Positive)'){echo 'selected="selected"';}?>>A(Positive)</option>
		  <option value='A(Negative)' <?php if($bloodgroup=='A(Negative)'){echo 'selected="selected"';}?>>A(Negative)</option>
		  <option value='B(Positive)' <?php if($bloodgroup=='B(Positive)'){echo 'selected="selected"';}?>>B(Positive)</option>
		  <option value='B(Negative)' <?php if($bloodgroup=='B(Negative)'){echo 'selected="selected"';}?>>B(Negative)</option>
		   <option value='AB(Positive)' <?php if($bloodgroup=='AB(Positive)'){echo 'selected="selected"';}?>>AB(Positive)</option>
		  <option value='AB(Negative)' <?php if($bloodgroup=='AB(Negative)'){echo 'selected="selected"';}?>>AB(Negative)</option>
		   <option value='O(Positive)' <?php if($bloodgroup=='O(Positive)'){echo 'selected="selected"';}?>>O(Positive)</option>
		  <option value='O(Negative)' <?php if($bloodgroup=='O(Negative)'){echo 'selected="selected"';}?>>O(Negative)</option>
  </select> 
  <br><br>
  DISTRICT:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <select name='district'  value="<?=$district?>">
		  <option value='Dhaka' <?php if($district=='Dhaka'){echo 'selected="selected"';}?>>Dhaka</option>
		  <option value='Khulna' <?php if($district=='Khulna'){echo 'selected="selected"';}?>>Khulna</option>
		  <option value='Rajshahi' <?php if($district=='Rajshahi'){echo 'selected="selected"';}?>>Rajshahi</option>
		  <option value='Sylhet' <?php if($district=='Sylhet'){echo 'selected="selected"';}?>>Sylhet</option>
		  <option value='Chittagong' <?php if($district=='Chittagong'){echo 'selected="selected"';}?>>Chittagong</option>
		  <option value='Barisal' <?php if($district=='Barisal'){echo 'selected="selected"';}?>>Barisal</option>
		  <option value='Rangpur' <?php if($district=='Rangpur'){echo 'selected="selected"';}?>>Rangpur</option>
  </select>
  <br><br>
	GENDER:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		  <input type='radio' name='gender' value='male'<?php if($gender=='male'){echo 'checked';}?> /> Male
		  <input type='radio' name='gender' value='female' <?php if($gender=='female'){echo 'checked';}?> /> Female
		  
		  <br><br>
  LAST DONATE DATE:&nbsp;&nbsp;&nbsp;&nbsp;
          <input type='text' name='ddate' value="<?=$ldate?>">
  <br><br>
		  
  CONTACT NO:&nbsp;
          <input type='text' name='contact' value="<?=$contactno?>">
		  <input type='hidden' name='id' value="<?=$id?>">
		  
  <br><br>
  
       <input   type='submit' name='update' value='UPDATE'/>

</form> <br>




 <div style="clear:both;"></div>
</div>
</div>
</center>



<!------------------------------footer from footer.php------------------------>
<?php include("footer.php");?>



</body>
</html>






