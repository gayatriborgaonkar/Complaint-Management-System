<?php 

 include 'config.php';

$email_err=$npass_err=$cpass_err=$match_err=$msg=$error='';

if(isset($_POST['submit'])){

  $email = $_POST['email'];
  $npass= $_POST['newpassword'];
  $cpass= $_POST['cpassword'];

  $query = "select * from registration where email = '$email'";
  $run = mysqli_query($mysqli,$query);
  $row = mysqli_num_rows($run);

  if ($row==0)
    {
       $email_err="Email Id Does Not Exist";
    }
 else if ($npass=='')
  {
   
      $npass_err="Please Enter Your Password";
  }
  else if ($cpass=='')
  {
   
       $cpass_err="Please Re-enter Your Password";
  }
  else if ($npass !==$cpass)
  {
   
       $match_err="Password Do Not Match";
  }
  
  else{
      $sql = "Update registration set pass = '$npass', cpass = '$cpass' where email = '$email'";
      $run = mysqli_query($mysqli,$sql);

      if($run){
         $msg= "Password Changed Successfully";
      }
      else{
        $error= "Unable To Change Password";
      }

  }

}
 
?>



<!DOCTYPE html>
<head>
<title>Change Password</title>
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
  <h2>Change Password</h2>
  <hr>
    <form action="" method="post" >

      <div class="form-group ">
        <label><b>Email ID:</b></label>
        <span><?php echo $email_err; ?></span>
        <input type="text" class="ggg" name="email" class="form-control" placeholder="Enter Your Email ID"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required="">
      </div>

      <div class="form-group ">
        <label><b>New Password:</b></label>
         <span><?php echo $npass_err; ?></span>
        <input type="text" class="ggg" name="newpassword" class="form-control" placeholder="Enter  New Password" pattern=".{8,}" title="Eight or more characters" required="">
      </div>

      <div class="form-group ">
        <label><b>Confirm Password:</b></label>
        <span><?php echo $cpass_err; ?></span>
       <input type="text" class="ggg" name="cpassword" class="form-control" placeholder="Enter  Confirm  Password" pattern=".{8,}" title="Eight or more characters" required="">
      </div>

        <div class="clearfix"></div>
        <input type="submit" value="Submit" name="Submit">
    </form>
    
</div>
</div>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>





