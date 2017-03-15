<?php include("../service/register_service.php"); ?>
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
#log{
	
	margin-bottom:400px;
}


    </style>
  </head>
<body>
<!------------------------------header from header.php------------------------>
<div class="container">

<!------------------------------header part------------------------>
<header>
<a href="admin_login.php"><img src="bl.png" width="80px" height="80px" style="float:left" /><h1 >BlooD DonatE</h1></a>
</header>


<!------------------------------Menu------------------------>
<ul>
            <li><a href='view_details.php'>VIEW DETAILS</a></li>
			<li><a href='admin_req_list.php'>REQUEST LIST</a></li>
			<li><a href='donor_approve.php'>APPROVE</a></li>
			<li><a href='admin_msg.php'>SEND MESSAGE</a></li>
			<li><a href='admin_search.php'>SEARCH</a></li>
			<li style='float:right'><a href='logout.php'>LOG OUT</a></li>
			<li style='float:right;color:white'>logged in as ADMIN</li>	


  
</ul>

</div>

<center>
<div id="log" >

<h1>Request List</h1>
<?php

	function get_all_donor_request(){
		$query = "SELECT * FROM `request`";
		return mysqli_query(get_db_connection(), $query);
        }
        $result = get_all_donor_request();	
	echo '<table border="1" align="center"><tr>
										<th>ID</th>
										<th>NAME</th>
										<th>CONTACT</th>
										<th>BLOODGROUP</th>
										<th>AMOUNT</th>
										<th>LOCATION</th>
										<th>APPROVE NO</th>
										<th>DELETE</th>
										<th>APPROVE</th>
										</tr>';
        
	while($data3 = mysqli_fetch_assoc($result)){				
			echo '<tr>
			<td>'.$data3['id'].'</td>
			<td>'.$data3['name'].'</td>
			<td>'.$data3['contact'].'</td>
			<td>'.$data3['bgroup'].'</td>
			<td>'.$data3['amount'].'</td>
			<td>'.$data3['location'].'</td>
			<td>'.$data3['approved'].'</td>
			<td><a href="request_delete.php?del='.$data3['id'].'">Delete</a></td>
			<td><a href="request_approve.php?approve='.$data3['id'].'">Approve</a></td>
			
			</tr>';
	}
	echo '</table>';

?>
</div>
</center>
 <div style="clear:both;"></div>

<!------------------------------footer from footer.php------------------------>
<?php include("footer.php");?>


</body>
</html>