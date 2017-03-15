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
<?php include("header.php");?>



<!-------------------------Show Data----------------------------->
<center>
<div id="log" >

<h1>All Donor List</h1>
<?php

	$result = get_all_donor_register();	
	echo '<table border="5" width="80%" align="center"><tr><th>FULLNAME</th><th>BLOODGROUP</th><th>DISTRICT</th><th>GENDER</th><th>LAST DOANTE DATE</th><th>CONTACTNO</th></tr>';
	while($data3 = mysqli_fetch_assoc($result)){				
			echo '<tr align="center">
			<td>'.$data3['FULLNAME'].'</td>
			<td>'.$data3['BLOODGROUP'].'</td>
			<td>'.$data3['DISTRICT'].'</td>
			<td>'.$data3['GENDER'].'</td>
			<td>'.$data3['LAST_DONATE_DATE'].'</td>
			<td>'.$data3['CONTACTNO'].'</td>
			</tr>';
	}
	echo '</table>';

?>

</div>
</center>
 <div style="clear:both;"></div>
</div>


<!------------------------------footer from footer.php------------------------>
<?php include("footer.php");?>


</body>
</html>