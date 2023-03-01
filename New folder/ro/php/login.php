<html>
    <head><title>Login Here!</title>
    <style>

        #btn{
            background-color:green;
            color: orange;
            border:double;
        }
        .div1{
            padding:90px;
            color:magenta;
            text-align:center;
            border-style:double;
            align-items:center;
            vertical-align:center;
            position:absolute;
            width:20%;
            left:500px;
            right:500px;
            top:200px;
            bottom:200px;
        }
        </style>
</head>
<body bgcolor="cyan">
    <?php
    session_start();
    if(!empty($_SESSION["username"])){
        echo "<script>alert('Already Logged In');</script>";
        header("location:iframe.php");
    }else{
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(isset($_POST["btn"])){
                $conn=new mysqli("localhost","root","","text");
                if($conn->connect_error){
                    die("error".$conn->connect_error);
                }else{
                    $user=$_POST["user"];
                    $pswd=$_POST["pswd"];
                    $q="select * from register where username='$user' and password='$pswd';";
                    if($res=$conn->query($q)){
                        if($res->num_rows>0){
                            $_SESSION["username"]=$user;
                            header("location:iframe.php");
                        }else{
                            echo "<script>alert('No Such User Exists');</script>";
                        }
                    }else{
                        echo"<script>alert('Login failed');</script>";
                    }
                }
            }
        }
    }
    ?>
<div class="div1">
    <form action="login.php" method="post">
       
        <table border=1 align="center">
            <caption><h3>Login HERE!</h3></caption>
            
<tr><td>
    Enter username
</td>
<td>
    <input type="text" placeholder="Username" name="user" required>
</td></tr>
<tr><td>
    Enter Password
</td><td>
    <input type="password" placeholder="Password" name="pswd" required>
</td><tr>
<tr><td colspan=2>
        <center>
            <input type="reset" value="RESET" id="btn">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" value="LOGIN" id="btn" name="btn">
        </center>
</td></tr>
</table>
</form>
<br>
<a href="logout.php" id="btn" class="tabl">Logout</a>
</div>
</body>
</html>


