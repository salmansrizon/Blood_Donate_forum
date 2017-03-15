<html>
  <head>
	<title>Blood Donation</title>


	
	<style>

	#search
	{
		width:35%;
		float:right;
		
		padding: 0px 20px 1px 15px;
        margin: 3px;
		box-shadow: 0px 0px 31px #888;
        margin-top: 10px;
		border-radius: 3px;
	}
	#RequestBlood
	{
		width:58%;
		float:left;
		
		padding: 0px 20px 0px 17px;
        margin: 3px;
		box-shadow: 0px 0px 31px #888;
        margin-top: 10px;
		border-radius: 3px;
	}

	.box {
		
		width: 37%;
		
		float: left;
		margin: 10px 3px 3px 17px;
		box-shadow: 0px 0px 31px #888;
     
    }
		 input[type=submit] {
    width: 20%;
    background-color: #b70e13;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
   input[type=text],select
	 {
		 width: 50%;padding: 5px;margin: 8px 0px;border: 1px solid #CCC;border-radius: 4px;
	 }


    </style>
  </head>
<body>
<!------------------------------header from header.php------------------------>
<?php include("header.php");?>

<!------------------------------Wallpaper------------------------>
<img src="4.jpg" style="width:60%;box-shadow: 0px 0px 31px #888;margin-top: 10px;">

<!-----------------------------Serach------------------------->
<div id="Search">
<h2 style="background-color:black;color:#b70e13;padding: 13px;border-radius: 3px;">Search Donor</h2>
<form method="post" action="../view/search_result.php">
  <span>Donor Blood Group:</span>
  <select name="bgroup">
		  <option value="A(Positive)">A(+)</option>
		  <option value="A(Negative)">A(-)</option>
		  <option value="B(Positive)">B(+)</option>
		  <option value="B(Negative)">B(-)</option>
		   <option value="AB(Positive)">AB(+)</option>
		  <option value="AB(Negative)">AB(-)</option>
		  <option value="O(Positive)">O(+)</option>
		  <option value="O(Negative)">O(-)</option>
  </select> 
  <br><br>
  <span>Donor District:</span>
         <select name="district">
		   <option  value="Dhaka">Dhaka</option>
		  <option  value="Khulna">Khulna</option>
		  <option  value="Rajshahi">Rajshahi</option>
		  <option  value="Sylhet">Sylhet</option>
		  <option  value="Chittagong">Chittagong</option>
		  <option  value="Barisal">Barisal</option>
		  <option  value="Rangpur">Rangpur</option>
  </select> 
  <br><br>
  <span>Donor Gender:</span>
		  <input type="radio" name="gender" value="male" checked> Male
		  <input type="radio" name="gender" value="female"> Female<br><br>
		  <input  type="submit"  value="Search"/>
</form> 
<br>
</div>

 <div style="clear:both;"></div>

<!------------------------------Request Blood------------------------>
<div id="RequestBlood" >
<h2 style="background-color:black;color:#b70e13;padding: 13px;border-radius: 3px;">Request for Blood</h2>
<form method="post" action="../service/request_service.php">
   <span>Your Name:*</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="text" name="name">
  <br><br>
  <span>Your Contact No:*</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="text" name="contact">
  <br><br>
  <span>Required Blood Group:*</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <select name="bgroup">
		  <option value="A(Positive)">A(+)</option>
		  <option value="A(Negative)">A(-)</option>
		  <option value="O(Positive)">O(+)</option>
		  <option value="O(Negative)">O(-)</option>
  </select> 
  <br><br>
  <span>Amount(Unit/Bag):</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="text" name="bunit">
  <br><br>
  <span>Location :</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <select name="location">
		  <option  value="Dhaka">Dhaka</option>
		  <option  value="Khulna">Khulna</option>
		  <option  value="Rajshahi">Rajshahi</option>
		  <option  value="Sylhet">Sylhet</option>
		  <option  value="Chittagong">Chittagong</option>
		  <option  value="Barisal">Barisal</option>
		  <option  value="Rangpur">Rangpur</option>
  </select> 
  <br><br>
  
       <input  type="submit"  value="REQUEST"/>

</form> <br>
</div>



<!------------------------------Anything------------------------>
<div class="box">
    <h2>Anything</h2><hr/>

 <div style="clear:both;"></div>
</div>

<!------------------------------footer from footer.php------------------------>
<?php include("footer.php");?>


</body>
</html>