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



<h1> DONOR APPROVE</h1>
<?php
	$query = "SELECT *FROM login";
	$result= mysqli_query(get_db_connection(), $query);	
	echo '<table border="5" width="80%" align="center"><tr>
	                                          <th>ID</th>
	                                          <th>USERNAME</th>
											  <th>PASSWORD</th>
											  <th>APPROVE NO</th>
											  <th>APPROVE</th>
											  </tr>';
	while($data3 = mysqli_fetch_assoc($result)){				
			echo '<tr align="center">
			<td>'.$data3['login_id'].'</td>
			<td>'.$data3['username'].'</td>
			<td>'.$data3['password'].'</td>
			<td>'.$data3['approved'].'</td>
			<td><a href="donor_approve_handler.php?donor_approve='.$data3['login_id'].'">Approve</a></td>
			</tr>';
	}
	echo '</table>';


?>
<?php //} ?>
</div>
</center>
 <div style="clear:both;"></div>
</div>


<!------------------------------footer from footer.php------------------------>
<?php //include("footer.php");?>


</body>
</html>
