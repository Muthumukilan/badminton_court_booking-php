<html>
    <style>
        *{
    margin: 0;
    padding: 0;
    }    
    .wrapper{
    width: 960px; 
    margin: 0 auto;
    
    }
    .wrapper ul{
    list-style: none;
    margin-top: 2%;
    }
    .wrapper ul a{
        text-decoration: none;
        color: white;
    }
    .wrapper ul li {
    background: #262626;
    width: 170px;
    border: 1px solid #fff;
    height: 50px;
    line-height: 50px;
    text-align: center;
    float: left;
    color: #fff;
    font-size: 16px;
    position: relative;
    font-family: poppins;
    text-transform: uppercase;
    font-weight: bold;
    }
    .wrapper ul li:hover{
    background: crimson; 
    }
    .cen{
        text-align: center;
        background-color: rgb(16, 185, 92);
        font-size: 40px;
    }
    .lef{
        text-align: right;
        background-color: blue;
        font-size: 20px;
        color:white;
    }    
#rt{
    height: 500px;
    opacity:0.8;
    width: 100%;
} 
.center{
    position: absolute;
    text-align: center;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: larger;
  color: aliceblue;
  text-transform: uppercase;
}
footer {
  text-align: center;
  text-transform: uppercase;
  padding: 3px;
  background-color: rgb(224, 172, 155);
  color: rgb(68, 2, 2);
}
    </style>
    <?php
    $ei=$_COOKIE["eid"];
    echo "<p class='lef'>$ei</p>";
    ?>
    <body style="background-color: rgb(243, 238, 220);">

        <div class="cen">AAA Badminton</div>
    <div class="wrapper">
        <ul>        
        <li><a href="scup.php">match history </a></li>
        <li><a href="matup.html">match update</a></li>
        <li><a href="his.php">history </a></li>
        <li><a href="in.html">register </a></li>
        <li><a href="sign_in.php">sign out</a></li>
        
        </ul>
        </div>
    <section >
    <br>
    </div>
    <img src="im1.jpg" id="rt">
    <div class="center"><p style="font-size: xx-large;">hello welcome to ABC Badminton</p>
    This is one of the best court in vellore<br>  
    </div>
    <footer>
        <p>aaa Badminton<br> yyy city tamil nadu<br>
            <a href="aaa@Gmail.com">aaa@Gmail.com</a>
        </p>
    </footer>
    </section></body>
</html>