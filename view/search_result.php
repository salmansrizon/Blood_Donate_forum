<?php include("../data/dbcon.php"); ?>
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

<h1>Search List</h1>
<?php
        

    $bgroup=  filter_input(INPUT_POST, 'bgroup');
    $district=  filter_input(INPUT_POST, 'district');
    $gender=  filter_input(INPUT_POST, 'gender');
 
        $query = "SELECT  * FROM donorreg WHERE  BLOODGROUP='$bgroup' and DISTRICT='$district' and GENDER='$gender' ";
        $resul=mysqli_query( get_db_connection(),$query);
        //$data3=mysqli_fetch_array( $resul);
        //if($bgroup==$db_bggroup && $district == $db_district && $gender == $db_gender)
        echo '<table border="1"><tr><th>USERNAME</th><th>CONTACT</th><th>BLOODGROUP</th><th>DISTRICT</th><th>GENDER</th></tr>';
      while($data3 = mysqli_fetch_assoc($resul))
        {
					
			echo '<tr>
            <td>'.$data3['USERNAME'].'</td>
            <td>'.$data3['CONTACTNO'].'</td>
			<td>'.$data3['BLOODGROUP'].'</td>
			<td>'.$data3['DISTRICT'].'</td>
			<td>'.$data3['GENDER'].'</td>
			</tr>';
        }
	echo '</table>';
       // do {
    


?>
</div>
</center>
 <div style="clear:both;"></div>



<!------------------------------footer from footer.php------------------------>
<?php include("footer.php");?>

exit();
</body></html>
