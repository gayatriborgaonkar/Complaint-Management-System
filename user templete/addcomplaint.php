<?php include 'config.php'; ?>
<!DOCTYPE html>
<head>
<title>Add Complaints</title>
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
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- calendar -->
<!--<link rel="stylesheet" href="css/monthly.css">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
</head>
<body>
<section id="container">
<!--header start-->
<?php include'header.php';?>
<!--header end-->
<!--sidebar start-->
<?php include'sidebar.php';?>
<!--sidebar end-->
<!--main content start-->
<script type="text/javascript">
  function validateform()
  {
    var x = document.forms["myform"]["email"].value;
    if (x == "")
      {
        alert("Email must be filled out");
        return false;
      }

    var x1 = document.forms["myform"]["cregarding"].value;
    if (x1 == "")
      {
        alert("Complaint is regarding must be filled out");
        return false;
      }

    var x2 = document.forms["myform"]["ncomplaint"].value;
    if (x2 == "")
      {
        alert("Nature of complaint must be filled out");
        return false;
      }

       var x3 = document.forms["myform"]["contact"].value;
        if (x3 == "")
      {
        alert("Contact No. must be filled out");
        return false;
      }
}

</script>
</head>

<body>
   
    <section id="main-content">
  <section class="wrapper">
    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
     Add Complaint 
       
    </div>

 <div class="panel-body">
 <div class=" form">
 <form class="cmxform form-horizontal tasi-form" method="post" name="myform"  onSubmit="return validateform()" enctype="multipart/formdata" action="">


 <div class="form-group ">
 <label class="control-label col-lg-3">Email ID:</label>
 <div class="col-lg-6">
 <input class="form-control" id="email" name="email"  type="text"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
 </div>
 </div>

<div class="form-group ">
 <label class="control-label col-lg-3">The Complaint Is Regarding:</label>
 <div class="col-lg-6">
 <select class="form-control" name="cregarding" id="cregarding">
<option value="">Select The Complaint Is Regarding</option>
<option value="Cleanning">Cleanning</option>
<option value="Staff">Staff</option>
<option value="Raginng">Raginng</option>
</select>
 </div>
 </div>
 

 <div class="form-group ">
 <label class="control-label col-lg-3">Nature Of Complaint:</label>
 <div class="col-lg-6">
 <textarea class="form-control"  rows="5" id="ncomplaint" name="ncomplaint" type="text"></textarea> 
 </div>
 </div>

<div class="form-group ">
 <label class="control-label col-lg-3">Photo:</label>
 <div class="col-lg-6">
 <img id="preview_img" src="images/g6.jpg" height="100" width="100"/>
 <input type="file" id="image" class="form-control" name="photo" accept=" .png, .jpg, .jpeg ">
 </div>
 </div>


<div class="form-group ">
 <label class="control-label col-lg-3">Contact Number:</label>
 <div class="col-lg-6">
 <input class="form-control" id="contact" name="contact" type="text"  pattern="^\d{10}$"  title="please Enter correct mobile number" >
 </div>
 </div>


 <div class="form-group">
 <div class="col-lg-offset-5 col-lg-10">
 
        <input type="submit" class="btn btn-primary" value="submit" id="submit" name="submit">
 </div>
 </div>
 </form>
 </div> <!-- .form -->
 </div> <!-- panel-body -->
 </div> <!-- panel -->
 </div> <!-- col -->
 </div>
</section>
</section>
</body>

 <?php

        if(isset($_POST['submit']))
        {
            extract($_POST);
            $today =date_default_timezone_set('Asia/Kolkata'); 

        if (isset($_FILES['photo']))
        { 


              $tmpName  = $_FILES['photo']['tmp_name'];  

              $fp      = fopen($tmpName, 'r');
              $data = fread($fp, filesize($tmpName));
              $data = addslashes($data);
              fclose($fp);            
        }

         $result=mysqli_query($mysqli,"INSERT into complaint values('',curdate(),'','$email','$cregarding','$ncomplaint','$photo','$contact')");
         
        if($result)
        {
        echo "<script>;";
        echo "window.alert('Data insert successfully....!');";
        echo 'window.location.href = "complaints view.php";';
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