<?php
$con=mysqli_connect('localhost','root','','ipwt');
$coo=$_COOKIE["eid"];
$i1=$_POST["p1"];
$i2=$_POST["p2"];
$i3=$_POST["o1"];
$i4=$_POST["o2"];
$i5=$_POST["sc"];
$i6=$_POST["dt"];
$q1="INSERT into score values('$i1','$i2','$i3','$i4','$i5','$coo','$i6')";
$r1=mysqli_query($con,$q1);
header("Location: home.php");
exit();
?>