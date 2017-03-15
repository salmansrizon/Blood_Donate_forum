<?php //include("../service/register_service.php");?>
<?php include("../data/dbcon.php"); ?>
<html>
  <head>
	<title>Blood Donation</title>
	<style>

	
     #log{
		 width: 800px;
		 box-shadow: 0px 0px 31px #888;
        margin-top: 50px;
		margin-bottom: 350px;
		border-radius: 3px;
	 }
	 input[type=text],select
	 {
		 width: 50%;padding: 5px;margin: 8px 0px;border: 1px solid #CCC;border-radius: 4px;
	 }
	 input[type=date]
	 {
		 width: 50%;padding: 5px;margin: 8px 0px;border: 1px solid #CCC;border-radius: 4px;
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
	 .error {color: #FF0000;}


    </style>
       <script type="text/javascript">

  function checkForm(form)
  {
    if(form.name.value == "") {
      alert("Error: Name cannot be blank!");
      form.name.focus();
      return false;
    }
    re = /^\w+$/;
    if(!re.test(form.name.value)) {
      alert("Error: Name must contain only letters, numbers and underscores!");
      form.name.focus();
      return false;
    }

    if(form.pass.value != "" ) {
      if(form.pass.value.length < 6) {
        alert("Error: Password must contain at least six characters!");
        form.pass.focus();
        return false;
      }
      if(form.pass.value == form.name.value) {
        alert("Error: Password must be different from Username!");
        form.pass.focus();
        return false;
      }
      re = /[0-9]/;
      if(!re.test(form.pass.value)) {
        alert("Error: password must contain at least one number (0-9)!");
        form.pass.focus();
        return false;
      }
      re = /[a-z]/;
      if(!re.test(form.pass.value)) {
        alert("Error: password must contain at least one lowercase letter (a-z)!");
        form.pass.focus();
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(form.pass.value)) {
        alert("Error: password must contain at least one uppercase letter (A-Z)!");
        form.pass.focus();
        return false;
      }
    }
    if(form.pass.value == form.name.value) {
        alert("Error: Password must be different from Username!");
        form.pass.focus();
        return false;

    //alert("You entered a valid password: " + form.pwd1.value);
    return true;
  }
if(form.email.value == "") {
      alert("Error: Email cannot be blank!");
      form.email.focus();
      return false;
  }
  re = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if(!re.test(form.email.value)){
  	alert("Error:Please use valid Email!!");
  	form.email.focus();
  	return false;
  }
    if(contact.value == "") {
    window.alert("Error: Cell number must not be null.");
    contact.focus();
    return false;
}
	if (contact.value.length != 11) {
    window.alert("Phone number must be 11 digits.");
    contact.focus();  
    return false;
	}

}

</script>
  </head>
<body>



<!------------------------------header from header.php------------------------>
<?php include("header.php");?>


<!------------------------------Register form------------------------>
<center>
<div id="log" >
<h2 style="background-color:black;color:#b70e13;padding: 13px;border-radius: 3px;">REGISTER</h2>
<p><span class="error">* required field.</span></p>
 <form method="post" action="register.php" onsubmit="return checkForm(this);">
   FULL NAME:&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="text" name="Fname"><span class="error">* <?php echo @$_GET['fname'];?></span>
  <br><br>
  USER NAME:&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="text" name="name"><span class="error">* <?php echo @$_GET['uname'];?></span>
  <br><br>
   PASSWORD:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="password" name="pass" style="width: 50%;padding: 5px;margin: 8px 0px;border: 1px solid #CCC;border-radius: 4px;">
		  <span class="error">* <?php echo @$_GET['passw'];?></span>
  <br><br>
  EMAIL:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="text" name="email" ><span class="error">* <?php echo @$_GET['eemail'];?></span>
  <br><br>
  BLOOD GROUP:
   <select name="bloodgroup">
		  <option value="A(Positive)">A(Positive)</option>
		  <option value="A(Negative)">A(Negative)</option>
		  <option value="B(Positive)">B(Positive)</option>
		  <option value="B(Negative)">B(Negative)</option>
		   <option value="AB(Positive)">AB(Positive)</option>
		  <option value="AB(Negative)">AB(Negative)</option>
		   <option value="O(Positive)">O(Positive)</option>
		  <option value="O(Negative)">O(Negative)</option>
  </select> 
  <br><br>
  DISTRICT:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <select name="district">
		  <option value="Dhaka">Dhaka</option>
		  <option value="Khulna">Khulna</option>
		  <option value="Rajshahi">Rajshahi</option>
		  <option value="Sylhet">Sylhet</option>
		  <option value="Chittagong">Chittagong</option>
		  <option value="Barisal">Barisal</option>
		  <option value="Rangpur">Rangpur</option>
  </select>
  <br><br>
	GENDER:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		  <input type="radio" name="gender" value="male"> Male
		  <input type="radio" name="gender" value="female"> Female
		  <span class="error">* <?php echo @$_GET['ggender'];?></span>
		  <br><br>
    LAST DONATE DATE:&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="text" name="date"><span class="error">* <?php echo @$_GET['ldate'];?></span>
  <br><br>
		  
  CONTACT NO:&nbsp;
          <input type="text" name="contact"><span class="error">* <?php echo @$_GET['ccontact'];?></span>
		  
  <br><br>
  
       <input   type="submit" name="submit" value="REGISTER"/>

</form> <br>


</div>
</center>
 <div style="clear:both;"></div>
</div>




<!------------------------------footer from footer.php------------------------>
<?php include("footer.php");?>



</body>
</html>

<?php
if(isset($_POST['submit']))
	{
    $fullname = $_POST['Fname'];
	$username = $_POST['name'];
	$password = $_POST['pass'];
	$email = $_POST['email'];
	$bloodgroup = $_POST['bloodgroup'];
	$district = $_POST['district'];
	$gender = $_POST['gender'];
	$date = $_POST['date'];
	$contactno = $_POST['contact'];
	if ($fullname=='' ) {
		  echo "<script>window.open('register.php?fname=FullName is required','_self')</script>";
	}
//---------------name validate--------
	if ($username=='' ) {
		  echo "<script>window.open('register.php?uname=Name is required','_self')</script>";
	}
    else {
    if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
      echo "<script>window.open('register.php?uname=Only Letters or Space input','_self')</script>";
    }
   }
  //---------------password validate--------
    if ($password=='' ) {
		  echo "<script>window.open('register.php?passw=Password is required','_self')</script>";
    }
	
   
//---------------Email validate--------
    if ($email=='' ) {
		  echo "<script>window.open('register.php?eemail=Email is required','_self')</script>";
  }
   else {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "<script>window.open('register.php?eemail=Email is not valid','_self')</script>";
    }
  }
 
//---------------Gender validate-------- 
    if ($gender=='' ) {
		  echo "<script>window.open('register.php?ggender=Gender is required','_self')</script>";
  }
  if ($date=='' ) {
		  echo "<script>window.open('register.php?date=date is required','_self')</script>";
	}
  
//---------------Contact validate--------
    if ($contactno==''  && strlen($contactno)==11) {
		  echo "<script>window.open('register.php?ccontact=Contact is required and 11 digit','_self')</script>";
  }
  
	
	
	
	$query1 = "INSERT INTO login(username,password,type,approved) 
		      VALUES('$username','$password','1','0')";
	mysqli_query(get_db_connection(), $query1);

	
	$query = "INSERT INTO donorreg(fullname,username,email,bloodgroup,district,gender,last_donate_date,contactno) 
		      VALUES('$fullname','$username','$email','$bloodgroup','$district','$gender','$date','$contactno')";
	mysqli_query(get_db_connection(), $query);
	
	echo "<script>alert('Successfully Register!!You can access after activated your account by admin!!')</script>";
	
	}
?>



