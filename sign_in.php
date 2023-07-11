<html>
    <style>
        .center {
            position: fixed;
            top: 50%;
            left: 50%;
            margin-top: -50px;
            margin-left: -100px;
            padding: 10px;
            color: rgb(0, 0, 0);
            font-size: larger;
            text-align: center;
}
    </style>
    <body>
        <img src="images.jpg" style="height: 100%;width: 100%;">
        <div class="center">
        <form method="POST"  action="sign.php">
            Email id:  <input type="email" id="eid" name="eid"><br><br>
            password: <input type="password" id="pass" name="pass"><br><br>
            <input type="submit">
            <button formaction="register1.php">register</button>
        </form>
    </div>
    </body>

</html>