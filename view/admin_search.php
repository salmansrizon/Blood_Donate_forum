<?php include("../service/register_service.php"); ?>
<html>
  <head>
	<title>Admin Search</title>
		<script>
function Request(value) {
document.getElementById("contentHolder").innerHTML = value;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("contentHolder").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "getHint.php?q="+value, true); //true=Asynchronous Request
        xmlhttp.send(); 
}
</script>
	<style>

	
     #log{
		 width: 80%;
		 box-shadow: 0px 0px 31px #888;
        margin-top: 100px;
		margin-bottom: 350px;
		border-radius: 3px;
		
	 }

 input[type=text],select
	 {
		 width: 50%;padding: 5px;margin: 8px 0px;border: 1px solid #CCC;border-radius: 4px;
	 }

    </style>
  </head>
<body>

<!------------------------------header from header.php------------------------>
<?php include("admin_login.php");?>



<!-------------------------Show Data----------------------------->
<center>
<div id="log" >



<h1> SEARCH</h1>

<input type="text" placeholder="search.." onkeyup="Request(this.value)">
<span id="contentHolder"></span>
</div>
</div>
</center>
 <div style="clear:both;"></div>
</div>


<!------------------------------footer from footer.php------------------------>
<?php //include("footer.php");?>


</body>
</html>
