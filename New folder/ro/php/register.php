<html>
    <head>
        <title>Registration</title>
<style>
    p{
        text-align:center;
        font-size:20px;
    }
    .center1{
        text-align:center;  
        font-size:20px;
        color:blue;
    }
</style>

</head>
<body>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        //session_start();
        if(isset($_POST["btn"])){
            $conn=new mysqli("localhost","root","","text");
            if($conn->connect_error){
                die("ERROR".$conn->connect_error);
            }else{
                $roll=$_POST["rollno"];
                $name=$_POST["name"];
                $user=$_POST["user"];
                $pswd=$_POST["pswd"];
                $gender=$_POST["gender"];
                $sub=$_POST["sub"];
                $mark=$_POST["mark"];
                $q1="select * from register where username='$user' and name='$name';";
                $check=$conn->query($q1);
                if($check->num_rows<=0){
                $q2="insert into register(rollno,name,username,password,gender,subject,mark)values('','$name','$user','$pswd','$gender','$sub','$mark');";
                $res=$conn->query($q2);
                if($res){
                   echo "<script>alert('User Registered Successfully');</script>";
                }else{
                    echo "<script>alert('!OOPS...Registration Failed');</script>";
                }
            }else{
                echo "<script>alert('User already exists');</script>";
            }}
        }

    }
    ?>
 <center><br><br><br><br>
<form action="register.php" method="post">
<table border=1 cellpadding=2>
    <caption><h3>Register HERE!</h3></caption>
<tr><td>Roll number</td><td>
    <input type="text" placeholder="ENTER ROLL NUMBER" name="rollno">
</td></tr><tr><td>Name</td><td>
    <input type="text" placeholder="ENTER NAME" name="name" required>
</td></tr><tr><td>User Name</td><td>
    <input type="text" placeholder="ENTER USERNAME" name="user" required>
</td></tr><tr><td>Password</td><td>
    <input type="password" placeholder="ENTER PASSWORD" name="pswd" required>
</td></tr><tr><td>Select Gender</td><td>
<input type="radio" value="male" name="gender">MALE&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp<input type="radio" value="female" name="gender">FEMALE
</td></tr><tr><td>Select Subject</td><td>
    <select name="sub" required>
        <option value="C++">C++</option>
        <option value="Python">Python</option>
        <option value="Java">Java</option>
        <option value="C">C</option>
        <option value="Golang">Golang</option>
        <option value="NodeJS">Node JS</option>
    </select>
</td></tr><tr><td>Mark</td><td>
    <input type="text" placeholder="ENTER MARK" name="mark" required>

<tr><td colspan=2><center><input type="reset" value="reset">&nbsp&nbsp&nbsp&nbsp<input type="submit" value="Register" name="btn"></center></td>
</table>
</form>
<a href="login.php"><b>Login Here!<b></a>
</center>
</body>
</html>
