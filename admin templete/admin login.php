
<!DOCTYPE html>
<head>
<title>admin login</title>
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

</head>
<body>
<div class="log-w3">
<div class="w3layouts-main">
	<h2>Admin Login</h2>
		<form action="admin login.php" method="post">
			<input name="adm" type=text value="admin@1234" class="ggg">
			<input class="ggg" type=password name="pss" placeholder="Enter Password"  required="">
			<span><input type="checkbox" />Remember Me</span>
			<h6><a href="#">Forgot Password?</a></h6>
				<div class="clearfix"></div>
				<input type="submit" value="Sign In" name="login">
		</form>
</div>
</div>

</body>
</html>

<?php
if(isset($_POST['login']))
{
if($_POST['adm']=="admin@1234" && $_POST['pss']=="admin123")
{
		header('Location:/gayatri-complaint management/admin templete/dashboard.php');

}
else
	
	{
		echo '<script> alert("Invalid password")</script>';
	}

}
?>
