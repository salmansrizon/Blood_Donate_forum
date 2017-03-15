
<?php include('../data/dbcon.php')?>
<?php	
	session_start();

?>
<html>
  <head>
	<title>Blood Donation</title>
	<style>


	 
	 header{
    padding: 1em;
    background-color: black;
    clear: left;
	box-shadow: 0px 0px 31px #888;
        margin-top: 1px;

}
/*---------------------------Menu Start----------------------*/
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
	width:100%;
	box-shadow: 0px 0px 31px #888;
        margin-top: 1px;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #b70e13;
}
a{
text-decoration:none;
}

/*-----------------------------Menu End-------------------------------*/
h1
{
 padding: 11px 16px;
 color:#b70e13;
}


.container {
    width: 100%;
   
}
#donor{
	
	margin-bottom:400px;
}
#log{
		 width: 800px;
		 box-shadow: 0px 0px 31px #888;
        margin-top: 50px;
		margin-bottom: 350px;
		border-radius: 3px;
	 }

    </style>
  </head>
<body>
<!------------------------------header from header.php------------------------>
<div class="container">

<!------------------------------header part------------------------>
<header>
<a href="donor_login.php"><img src="bl.png" width="80px" height="80px" style="float:left" /><h1 >BlooD DonatE</h1></a>
</header>


<!------------------------------Menu------------------------>
<ul>
           <li><a href='profile.php'>PROFILE</a></li>
        <li><a href='doner_req_list.php'>REQUEST LIST</a></li>
		<li><a href='donor_msg.php'>MESSAGE</a></li>
		<li style='float:right'><a href='logout.php'>LOG OUT</a></li>
		<li style='float:right'>logged is as DONOR</li>


  
</ul>

</div>

<center>
<div id="log" >

<h1>PROFILE</h1>
<?php
        $name=$_SESSION['name'];
		$query = "SELECT * FROM `donorreg` WHERE USERNAME='$name' ";
		$run=mysqli_query(get_db_connection(), $query);
 	

	//echo '<table border="1"><tr><th>NAME</th><th>CONTACT</th><th>BLOODGROUP</th><th>DISTRICT</th><th>GENDER</th></tr>';
        
	while($data3 = mysqli_fetch_assoc($run)){				
			
        echo '<table style="width:100%">

                     <tr>
                       <td><span>Full Name:</span></td>
                       <td align="center">'.$data3['FULLNAME'].'</td>
                     </tr>
					 
					 <tr>
                       <td><span>Email:</span></td>
                       <td align="center">'.$data3['EMAIL'].'</td>
                     </tr>
					 <tr>
                       <td><span>Blood Group:</span></td>
                       <td align="center">'.$data3['BLOODGROUP'].'</td>
                     </tr>
					 <tr>
                       <td><span>District:</span></td>
                       <td align="center">'.$data3['DISTRICT'].'</td>
                     </tr>
					 <tr>
                       <td><span>Gender:</span></td>
                       <td align="center">'.$data3['GENDER'].'</td>
                     </tr>
					 <tr>
                       <td><span>Last Donate Date:</span></td>
                       <td align="center">'.$data3['LAST_DONATE_DATE'].'</td>
                     </tr>
					 <tr>
                       <td><span>Contact no:</span></td>
                       <td align="center">'.$data3['CONTACTNO'].'</td>
                     </tr>
					 <tr>
					 <td align="center"><a href="user_edit.php?edit='.$data3['ID'].'">Edit</a></td>
					 </tr>';
	}
	echo ' </table>';
	
        

?>
</div>
</center>
 <div style="clear:both;"></div>

<!------------------------------footer from footer.php------------------------>
<?php include("footer.php");?>


</body>
</html>