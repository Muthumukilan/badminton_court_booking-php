<?php
$con=mysqli_connect('localhost','root','','ipwt');
$q1="SELECT * from book";
$a1=mysqli_query($con,$q1);
$flag=1;
$coo=$_COOKIE["eid"];
$op1=$_POST['op1'];
$dt=$_POST['dt'];//date
$slot=$_POST['slot'];
$cno=ji($op1);
$cn=1;
while($r1=mysqli_fetch_array($a1)){
    if($dt==$r1[1] and $slot==$r1[4] and $op1==$r1[0]){
        while($cn<=$cno){
            if($cn==$r1[5]){
                $cn++;
                $flag=0;
            }
            else{
                $flag=1;
                break;
            }
        }    
    }
}
if($flag==1 and $cn<=$cno){
    $p=rand(1000,100000);
    $y="INSERT INTO book VALUES('$op1','$dt','$coo','$p','$slot','$cn')";
    $j=mysqli_query($con,$y);
    header("Location: home.php");
}
else{
    echo"<script> alert('slot full') </script>";
}
function ji($op1){
    switch($op1){
        case "1":
            return '3';
            break;
        case "2":
            return '4';
            break;
        case "3":
            return '2';
            break;
        default:
            break;
    }
}
?>
<html>
<style>
.home{
    color: white;
    background: #9193d2;
    width: 100px;
    border: 1px solid #fff;
    height: 50px;
    line-height: 50px;
    text-align: center;
    float: left;   
    font-size: 16px;
    position: relative;
    font-family: poppins;
    text-transform: uppercase;
    font-weight: bold;   
}
h1{
    text-align: center;
    color:red;
}
</style>
<p class="home"><a style="text-decoration-color: #fff;" href="home.php">Home</a></p>
<h1>Choose other slot!!!!</h1>
</html>