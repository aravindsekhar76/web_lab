<?php
include 'connection.php';
session_start();
if(isset($_POST["submit"])){
    $uname=$_POST["uname"];
    $pass=$_POST["pass"];
    $q= "select * from login where username='$uname' and password='$pass'";
    $res=mysqli_query($con,$q);
    if(mysqli_num_rows($res)>0){
        $_SESSION['uname']=$uname;
        header("location:profile.php");
    }
    else{
        echo"<script>alert('invalid credentials')</script>";
    }
}
?>