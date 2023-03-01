<?php
include 'connection.php';
session_start();
if (isset($_POST["submit"])){
    $rno=$_POST["rollno"];
    $name=$_POST["name"];
    $phy=$_POST["phy"];
    $chem=$_POST["chem"];
    $maths=$_POST["maths"];
    $q="INSERT INTO `details`(`rollno`, `name`, `phy`, `chem`, `maths`) VALUES ('$rno','$name','$phy','$chem','$maths')";
    $res=mysqli_query($con,$q);
    if($res){
        echo "<h1><marquee bgcolor='lightblue'> sucessfully inserted mark of  " .$name. "</marquee></h1>";
        $_SESSION['rno']=$rno;
        echo "<a href='viewmark.php'>view inserted data</a>";
    }
}
?>