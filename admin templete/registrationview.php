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
      Registration View</b>
      
  </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <!--<select class="input-sm form-control w-sm inline v-middle">
          <option value="0">Bulk action</option>
          <option value="1">Delete selected</option>
          <option value="2">Bulk edit</option>
          <option value="3">Export</option>
        </select>
        <button class="btn btn-sm btn-default">Apply</button>-->                
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-2">
        <div class="input-group">
          <h5><i class="fa fa-search" aria-hidden="true"></i>   Search for names..</h5>

          <input type="text" id="myInput" onkeyup="myFunction()" class="input-sm form-control" title="Type in a name">

          
        </div>
      </div>
    </div>
    <div class="table-responsive">

       <?php
        $view = mysqli_query($mysqli,"select * from registration order by id desc");
      ?>
    
<table class="table table-striped b-t b-light" id="myTable">

    
        <thead>
          <tr>

            <th>Student ID</th>
            <th>Name</th>
            <th>Roll No.</th>
            <th>Username</th>
            <th>Email ID</th>
            <th>Password</th> 
            <th>Mobile</th> 
            <th>Department</th> 
            <th>Year</th> 
            <th>Gender</th>
            <th>Photo</th>
            <th>Date</th>
            
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
            <td><?php echo $row['stud_name'];?></td>
            <td><?php echo $row['stud_roll'];?></td>
            <td><?php echo $row['stud_username'];?></td>
            <td><?php echo $row['stud_email'];?></td>
            <td><?php echo $row['stud_pass'];?></td>
            <td><?php echo $row['stud_mobile'];?></td>
            <td><?php echo $row['stud_depart'];?></td>
            <td><?php echo $row['stud_year'];?></td>
            <td><?php echo $row['stud_gender'];?></td>
            <td> <img src='<?php echo $row['stud_photo'];?>' /></td>
            <td><?php echo $row['stud_date'];?></td>
            
           
            
          </tr>
            
             <?php } ?>
         
        </tbody>
       
      </table>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
        </div>
      </div>
  </div>
</section>

 <!-- footer -->
     <?php include'footer.php';?>
  <!-- / footer -->
