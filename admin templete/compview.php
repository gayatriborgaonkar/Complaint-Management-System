<?php include 'config.php'; ?>
<!DOCTYPE html>
<head>
<title>registration view</title>
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
5
<!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading"><b>
      Complaints View</b>

  </div>
   <!-- <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">Bulk action</option>
          <option value="1">Delete selected</option>
          <option value="2">Bulk edit</option>
          <option value="3">Export</option>
        </select>
        <button class="btn btn-sm btn-default">Apply</button>                
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div-->
    <br>
    <div class="table-responsive">

       <?php
    $view = mysqli_query($mysqli,"select * from complaint order by com_id desc");
?>
    
<table class="table table-striped b-t b-light">

    
        <thead>
          <tr>
            
            
            <th>Student ID</th>
            <th>Form Filling Date</th>
            <th>Student Name</th>
            <th>Email ID</th>
            <th>The Complaint Is Regarding</th>
            <th>Nature Of Complaint</th> 
            <th>The specific picture of the complaint</th>
            <th>Contact</th> 
            <th>Action</th> 
            
            
            
            <th style="width:30px;"></th>
          </tr>
        </thead>
        
        <tbody>
          <?php
            $counter = 0;
            while ($row = mysqli_fetch_array($view)){
            extract($row);
          ?>
          <tr>
           
            <td><?php echo ++$counter; ?></td>
            <td><?php echo $row['comp_filling_date'];?></td>
            <td><?php echo $row['com_name'];?></td>
            <td><?php echo $row['com_email'];?></td>
            <td><?php echo $row['com_the complaint is regarding'];?></td>
            <td><?php echo $row['com_ ncomplaint'];?></td>
            <td><?php echo $row['com_photo'];?></td>
            <td><?php echo $row['com_contact'];?></td>
            
            <td>  
              <a class="text-danger" onClick="return confirm('Are you sure you want to delete this complaints details ?);" href="complaint delete.php? com_id=<?php echo $com_id;?>" title="Delete complaints details"ui-toggle-class=""><i class="glyphicon glyphicon-trash" style="color:red"></i></a>
            
            </td>
          </tr>
            
             <?php } ?>
         
        </tbody>
       
      </table>
        </div>
      </div>
  </div>
</section>

 