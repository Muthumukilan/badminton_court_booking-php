<?php
$con=mysqli_connect('localhost','root','','ipwt');
$eid=$_POST['eid'];
$pass=$_POST['pass'];
$ew="SELECT Email,password FROM user";
$r=mysqli_query($con,$ew);
$i=1;
$ei=(String)$eid;
while($che=mysqli_fetch_row($r)){
        if($che[0]==$eid and $che[1]==$pass){
            setcookie("eid",$ei,time()+86400,"/");
            header("Location: home.php");
            $i=1;
            break;
        }
        else{
            $i=0;
        }    
}
if($i==0){
    header("Location: sign_in.php");
}
?>