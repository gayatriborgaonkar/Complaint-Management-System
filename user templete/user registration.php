<?php include'config.php'; ?>
<!DOCTYPE html>
<head>
<title>user registration</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>

<script>
$(document).ready(function(){
    $('input:checkbox').click(function() {
        $('input:checkbox').not(this).prop('checked', false);
    });
});
</script>

<script type="text/javascript">
	function validateform()
	{
		var x = document.forms["myform"]["name1"].value;
		if (x == "")
			{
				alert("Name must be filled out");
				return false;
			}

		var x1 = document.forms["myform"]["roll no"].value;
		if (x1 == "")
			{
				alert("Roll Number must be filled out");
				return false;
			}

		var x2 = document.forms["myform"]["username"].value;
		if (x2 == "")
			{
				alert("Username must be filled out");
				return false;
			}

		var x3 = document.forms["myform"]["email"].value;
		if (x3 == "")
			{
				alert("Email Address must be filled out");
				return false;
			}

		var x4 = document.forms["myform"]["pass"].value;
		if (x4 == "")
			{
				alert("Password must be filled out");
				return false;
			}

		var x5 = document.forms["myform"]["cpass"].value;
		
				if(x5 == "")
				{
						alert("Confirm Password must be filled out");
						return false;
				}
				 if(x5 != x4)
				{
						alert("Please check your confirm passowrd it is does't match with your password");
						return false;
				
				}

		var x6 = document.forms["myform"]["mobile"].value;
		if (x6 == "")
		{
				alert("Please Enter Your mobile Number");
				return false;
		}
		
		var x7 = document.forms["myform"]["department"].value;
		if (x7 == "")
		{
				alert("Please Select Your Department ");
				return false;
		}
		 
		 var cbox = document.getElementsByName('Year[]');
		if (
		
		cbox[0].checked == false && cbox[1].checked == false  &&
		cbox[2].checked == false
		
		)
		{
				alert("Please Select Your Current Year");
				return false;
		}
		
		var x8 = document.forms["myform"]["gender"].value;
		if (x8 == "")
		{
				alert("Please Select Gender");
				return false;
		}
		
		var x9 = document.forms["myform"]["photo"].value;
		if (x9 == "")
		{
				alert("Photo must be choosen");
				return false;
		}

	}

</script>
</head>

<body>
<div class="reg-w3">
<div class="w3layouts-main">
	<h2>Student Registration</h2>
	<hr>
	<div class="panel-body">
 	<div class=" form">
		<form class="cmxform form-horizontal"  method="POST" name="myform"  onSubmit="return validateform()" enctype="multipart/form-data"  id="registerform" action="">

			<div class="form-group ">
				<label><b>Name:</b></label>
				<div><input type="text" name="name1" id="name" class="ggg" placeholder="Enter your name" class="form-control"></div>
			</div>

			<div class="form-group ">
				<label><b>Roll Number:</b></label>
				<div><input type="text" row="5" name="roll no" id="roll no" class="ggg" placeholder="Enter your Roll Number" class="form-control" pattern="^\d{2}$"  title="please Enter correct Roll number"></div>
			</div>

			<div class="form-group ">
				<label><b>UserName:</b></label>
				<div><input type="text" name="username" id="username" class="ggg" placeholder="Enter your username" class="form-control"></div>
			</div>

			<div class="form-group ">		
				<label><b>Email ID</b></label>
				<div><input  type="text" name="email" id="email" class="ggg" placeholder="Enter Your Email Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" class="form-control"></div>
			</div>

			<div class="form-group ">
				<label><b>Password:</b></label>
				<div><input type="password" name="pass" id="pass" class="ggg" placeholder="Enter password" pattern=".{8,}" title="Eight or more characters" class="form-control"></div>
			</div>	
						
			<div class="form-group ">			
				<label><b>Confirm Password:</b></label>
				<div><input type="password" name="cpass" id="cpass" class="ggg" placeholder="Re-enter the password" pattern=".{8,}" title="Eight or more characters" class="form-control"></div>
			</div>

			<div class="form-group ">
				<label><b>Mobile Number:</b></label>
				<div><input type="Mobile" name="mobile" id="mobile" class="ggg" placeholder="Enter your Mobile No." pattern="^\d{10}$"  title="please Enter correct mobile number" class="form-control"></div>
			</div>
							
			<div class="form-group ">
				
						<label><b>Department:</b></label>
						<div>
							<select name="department" id="department">
								<option value="" >Select Your Department</option>
								<option value="computer">Diploma Of Computer Engineering</option>
								<option value="civil">Diploma Of Civil Engineering</option>
								<option value="mechanical">Diploma Of Mechanical Engineering</option>
								<option value="electronic">Diploma Of Electronic Engineering</option>
							</select>
						</div>
			</div>
			<br>


			<div class="form-group ">
				<label><b>Year: </b></label>
			
				<input type="checkbox" name="year[]"  id="year[]" value="first">1<sup>st</sup> Year
				<input type="checkbox" name="year[]"  id="year[]" value="secound">2<sup>nd</sup> Year
				<input type="checkbox" name="year[]"  id="year[]" value="third"> 3<sup>rd</sup> Year
				
			</div>
			<br>
			

			<div class="form-group ">
			<label><b>Gender:</b></label>
				
					<input type="radio" name="gender" id="gender" value="Male">Male
					<input type="radio" name="gender"  id="gender" value="Female" >Female
				
			</div>
			<br>
		
		<div class="form-group ">	
			<div><b>Photo:</b></div>
			<div>
				
				<input type="file" name="photo" id="photo" class="fileinput" accept=" .png, .jpg, .jpeg"></div>
			</div>

			
			<div class="clearfix"></div>
				<input type="submit" value="submit" id="submit" name="submit">
	</form>
	
</div>
</div>

</body>
</html>

<?php

		if(isset($_POST['submit']))
		{
			extract($_POST);
			$year1 = implode(',' ,$_POST['year']);
			$today =date_default_timezone_set('Asia/Kolkata'); 

			
		
		if (isset($_FILES['photo']))
		{ 


			  $tmpName  = $_FILES['photo']['tmp_name'];  

			  $fp      = fopen($tmpName, 'r');
			  $data = fread($fp, filesize($tmpName));
			  $data = addslashes($data);
			  fclose($fp);


				$result=mysqli_query($mysqli,"INSERT into registration values('','$name1','$roll_no','$username','$email','$pass','$cpass','$mobile','$department','$year1','$gender','$data',curdate())");
	
		}
	 		
	 	if($result)
		{
		echo "<script>;";
		echo "window.alert('Data insert successfully....!');";
		echo 'window.location.href = "registrationview.php";';
		echo "</script>";
		}
		else
		{
		echo "<script>;";
		echo "window.alert('Data error....!');";
		echo "</script>";
		}

		}
	
?>


 


