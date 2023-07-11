<html>
    <style>
        .center {
            position: fixed;
            top: 30%;
            left: 50%;
            margin-top: -30px;
            margin-left: -100px;
            padding: 10px;
            color: rgb(248, 202, 0);
            font-size: larger;
            text-align: left;
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <body>
    <p class="home"><a style="text-decoration-color: #fff;" href="sign_in.php">Home</a></p>
        <img src="images1.jpg" style="height: 100%;width: 100%;">
        <div>
        
        <form method="POST" action="register.php">
            <table  class="center">
            <tr><td>
            First Name:
            </td>
            <td><input type="text" id="fname"  name="fname"><br><br>
            </td></tr>
            <tr><td>
            Last Name:</td><td><input type="text" id="lname"  name="lname"><br><br>
            </td></tr>
            <tr>
                <td>Age: </td><td><input type="number" id="age"  name="age"><br><br>
                </td>
            </tr> <tr><td>Date.of.Birth :</td><td><input type="date" id="dob" name="dob"><br><br>
            </td></tr>
            <tr><td>Email id:</td><td>  <input type="email" id="eid" name="eid"><br><br></td></tr>
            <tr><td>password:</td><td> <input type="password" id="pass" name="pass"><br><br></td></tr>
            <tr><td> Confirm password:</td><td> <input type="password" id="cpass" name="cpass"><br><br></td></tr>
            <tr>
                <td colspan="2">
            <div style="text-align: center;">
                <input type=submit value=submit>
        </div>
    </td></tr>
    </table>
    </form>
    </div>
    </body>
</html>