<?php	
	session_start();

if(!$_SESSION['name']){
	header('Location: login.php');
}
?>
<html>
<head>


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


</style>
</head>
<body>
<div class="container">

<!------------------------------header part------------------------>
<header>
<a href="admin_login.php"><img src="bl.png" width="80px" height="80px" style="float:left" /><h1 >BlooD DonatE</h1></a>
</header>


<!------------------------------Menu------------------------>
<div id="admin">
<ul>
			<li><a href='view_details.php'>VIEW DETAILS</a></li>
			<li><a href='admin_req_list.php'>REQUEST LIST</a></li>
			<li><a href='donor_approve.php'>APPROVE</a></li>
			<li><a href='admin_msg.php'>SEND MESSAGE</a></li>
			<li><a href='admin_search.php'>SEARCH</a></li>
			<li style='float:right'><a href='logout.php'>LOG OUT</a></li>
			<li style='float:right;color:white'>logged is as ADMIN</li>	



  
</ul>
<h1 align='center'>WELCOME <?php echo $_SESSION['name'];?></h1>
</div>
</div>
 <div style="clear:both;"></div>


</body>
</html>