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
#donor{

	margin-bottom:100px;
}

</style>
</head>
<body>
<div class="container">

<!------------------------------header part------------------------>
<header>
<a href="donor_login.php"><img src="bl.png" width="80px" height="80px" style="float:left" /><h1 >BlooD DonatE</h1></a>
</header>


<!------------------------------Menu------------------------>
<div id="donor">
<ul>
 
  <li><a href='profile.php'>PROFILE</a></li>
   <li><a href='doner_req_list.php'>REQUEST LIST</a></li>
    <li><a href='donor_msg.php'>MESSAGE</a></li>
  <li style='float:right'><a href='logout.php'>LOG OUT</a></li>
  <li style='float:right;color:white'>logged is as DONOR</li>	
	


  
</ul>
<h1 align='center'>WELCOME <?php echo $_SESSION['name'];?></h1>
</div>
</div>
 <div style="clear:both;"></div>
<!------------------------------footer from footer.php------------------------>


</body>
</html>