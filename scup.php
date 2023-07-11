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
tr:nth-child(odd) {background-color: #f2f2f2;}
tr:nth-child(even) {background-color: #f2f2f2;}
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
#bk{
    background-image:  url("im3.jpg");
    background-repeat: no-repeat;
    background-size: 100% 100%;
}
</style>
</html>
<?php
$con=mysqli_connect('localhost','root','','ipwt');
$coo=$_COOKIE["eid"];
$q1="SELECT * From score ORDER by date1";
$r1=mysqli_query($con,$q1);
echo "<table>";
echo "<tr>";
echo "<th>date</th>";
echo "<th>player1</th>";
echo "<th>player2</th>";
echo "<th>opponent</th>";
echo "<th>opponent</th>";
echo "<th>point</th>";
echo "</tr>";
while($ch=mysqli_fetch_row($r1)){
      if($coo==$ch[5]){
        echo "<tr>";
        echo "<td>$ch[6]</td>";
        echo "<td>$ch[0]</td>";
        echo "<td>$ch[1]</td>";
        echo "<td>$ch[2]</td>";
        echo "<td>$ch[3]</td>";
        echo "<td>$ch[4]</td>";
        echo "</tr>";
}
}
?>