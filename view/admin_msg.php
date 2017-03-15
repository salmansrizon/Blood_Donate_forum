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



    </style>
  </head>
<body>

<!------------------------------header from header.php------------------------>
<?php include("admin_login.php");?>



<!-------------------------Show Data----------------------------->
<center>
<div id="log" >



<h1>MESSAGE</h1>
<table border="5" width="80%" align="center">
<tr>
	<th>ID</th>
	<th>FULLNAME</th>
	<th>BLOODGROUP</th>
	<th>DISTRICT</th>
	<th>GENDER</th>
	<th>LAST DONATE DATE</th>
	<th>CONTACTNO</th>
	<th>MESSAGE</th>
	<th>REPLY MESSAGE</th>
	<th>MSG USER</th>
	

</tr>

<?php

	$result = get_all_donor_register();	
	while($data3 = mysqli_fetch_assoc($result)){	
	$user_id=$data3['ID'];
	$user_name=$data3['FULLNAME'];
	$user_bloodgroup=$data3['BLOODGROUP'];
	$user_district=$data3['DISTRICT'];
	$user_gender=$data3['GENDER'];
	$user_l_donate_date=$data3['LAST_DONATE_DATE'];
	$user_contact=$data3['CONTACTNO'];
	$user_msg=$data3['message'];
	$user_r_msg=$data3['reply_message'];
?>
<tr align="center">
           <td><?php echo $user_id;?></td>
			<td><?php echo $user_name;?></td>
			<td><?php echo $user_bloodgroup;?></td>
			<td><?php echo $user_district;?></td>
			<td><?php echo $user_gender;?></td>
			<td><?php echo $user_l_donate_date;?></td>
			<td><?php echo $user_contact;?></td>
			<td><?php echo $user_msg;?></td>
			<td><?php echo $user_r_msg;?></td>
			<td><a href="ad_msg.php?msg=<?php echo $user_id;?>">Message</a></td>
			
			
</tr>
<?php } ?>
</div>
</center>
 <div style="clear:both;"></div>
</div>


<!------------------------------footer from footer.php------------------------>
<?php //include("footer.php");?>


</body>
</html>