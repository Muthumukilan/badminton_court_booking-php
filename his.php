<html id="bk">
<p class="home"><a style="text-decoration-color: #fff;" href="home.php">Home</a></p>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}
th, td {
  text-align: left;
  padding: 8px;
}
tr:nth-child(even){background-color: #f2f2f2 }
tr:nth-child(odd){background-color: #f2f2f2 }
th {
  background-color: #04AA6D;
  color: white;
}
#bk{
    
    background-image:  url("im5.jpg");
    background-repeat: no-repeat;
    background-size: 100% 100%;
}
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
</style>
</html>
<?php
$con=mysqli_connect('localhost','root','','ipwt');
$q1="SELECT * From book ORDER by date1";
$r1=mysqli_query($con,$q1);
$coo=$_COOKIE["eid"];
echo "<table>";
echo "<tr>";
echo "<th>cort type</th>";
echo "<th>cort number</th>";
echo "<th>date</th>";
echo "<th>slot</th>";
echo "<th>one time id</th>";
echo "</tr>";
while($ch=mysqli_fetch_row($r1)){
    if($ch[2]==$coo){
        echo "<tr>";
        ko($ch[0]);
        echo "<td>$ch[5]</td>";
        echo "<td>$ch[1]</td>";
        che($ch[4]);
        echo "<td>$ch[3]</td>";
        echo "</tr>";
    }
}

function ko($i){
  switch($i){
    case "1":
      echo "<td>Outer synthatic</td>";
      break;
    case "2":
      echo "<td>outdoor</td>";
      break;
    case "3":
      echo "<td>indoor synthatic </td>";
      break;
    default:
      echo "<td>indoor synthatic </td>";
  }
}
function che($q){
  switch ($q) {
    case "1":
      echo "<td>06:00 to 08:00</td>";
      break;
    case "2":
      echo "<td>09:00 to 11:00</td>";
      break;
    case "3":
      echo "<td>16:00 to 18:00</td>";
      break;
    default:
      echo "<td>20:00 to 22:00</td>";
  }

}
?>