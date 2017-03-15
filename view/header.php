
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
<a href="index.php"><img src="bl.png" width="80px" height="80px" style="float:left" /><h1 >BlooD DonatE</h1></a>



</header>



<!------------------------------Menu------------------------>
<ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href='alldonorlist.php'>ALL DONOR LIST</a></li>
      
        <li style='float:right'><a href='register.php'>DONOR REGISTER</a></li>
        <li style='float:right'><a href='login.php'>LOGIN</a></li>

  
</ul>

</div>
 <div style="clear:both;"></div>


</body>
</html>