<html>
    <head>
        <title>Home Page</title>
        
    </head>
<body target="win"><br><br><br><br><br>
<?php
session_start();
if(empty($_SESSION["username"])){
    header("location:login.php");
}
else{
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_POST["btn"])){
            $conn=new mysqli("localhost","root","","text");
            if($conn->connect_error){
                die("error".$conn->connect_error);
            }else{
                $sub=$_POST["sub"];
                $q="select avg(mark) from register where subject='$sub';";
                if($res=$conn->query($q)){
                    if($res->num_rows>0){
                        $row=$res->fetch_array();
                        echo "hello ".$row[0];
                        echo "<script>alert('Average mark of '+$sub+' is '+$row[0]);</script>";
                    }else{
                        echo "<script>alert('failed operation');</script>";
                    }
                }
            }
        }
    }
}
?>
</body>
<center>
<form method="post" action="home.php" >
    <table border=1>
        <tr><td>Select subject</td><td>
            <?php
            $conn=new mysqli("localhost","root","","text");
            if(!$conn->connect_error){
                $q="select distinct username from login;";
                $res=$conn->query($q);
                if($res->num_rows>0){
                    echo "<select name='sub' required>";
                    echo "<option value='0'>Select choice</option>";
                    while($res1=$res->fetch_assoc()){
                        echo "<option value=".$res1['username'].">".$res1['username']."</option>";
                    }echo "</select>";
                }
                
            }
            ?>
            </td></tr>
            <tr><td colspan=2><center><input type="submit" value="Average" name="btn">
        </table>
        </form>
        <a href="logout.php">Logout</a>
</center>

</html>