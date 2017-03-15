<?php include("../data/dbcon.php")?>
<?php
	$key = $_GET['q'];
	$query1 = "SELECT * FROM donorreg where FULLNAME like '%{$key}%' 
	OR BLOODGROUP like '%{$key}%' OR DISTRICT like '%{$key}%' OR GENDER like '%{$key}%' 
	OR LAST_DONATE_DATE like '%{$key}%' OR CONTACTNO like '%{$key}%'";
	$result=mysqli_query(get_db_connection(), $query1);
	echo '<table border="5" width="80%" align="center"><tr>
	                                          <th>FULLNAME</th>
											  <th>BLOODGROUP</th>
											  <th>DISTRICT</th>
											 
											  <th>LAST_DONATE_DATE</th>
											  <th>CONTACTNO</th>
											  </tr>';
	while($data3 = mysqli_fetch_assoc($result)){

				echo '<tr align="center">
			<td>'.$data3['FULLNAME'].'</td>
			<td>'.$data3['BLOODGROUP'].'</td>
			<td>'.$data3['DISTRICT'].'</td>

			<td>'.$data3['LAST_DONATE_DATE'].'</td>
			<td>'.$data3['CONTACTNO'].'</td>
			</tr>';

	}
	echo '</table>';
	
     ?>
	 
	 
 

	
