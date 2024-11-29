<?php include 'config.php';


if (isset($_GET['com_id']))
{
 $delete = mysqli_query($mysqli,"delete from complaint where
com_id='".$_GET['com_id']."'");

if ($delete)
{
echo "<script>;";
echo "alert('complaint record delete....!');";
echo 'window.location.href = "complaints view.php";';
echo "</script>;";
}
else
{
echo "<script>;";
echo "alert('complaint data error....!');";
echo 'window.location.href = "complaints view.php";';
echo "</script>;";
}
}
?>