<?php
session_start();
include 'connection.php';
$q= "SELECT * from details ";
$resu=mysqli_query($con,$q);
echo"<body bgcolor='lightblue'>";
echo "<table border=1 align='center' >";
echo" <caption><h3> INSERTED DATA</h3></caption>";
echo "<tr><th colspan=10><enter><b>Details</b></center></th></tr>";
while($row=mysqli_fetch_assoc($resu)){
    echo"<tr><td>rollno:</td>";
    echo"<td>".$row['rollno']."</td>";
    echo"<td>name:</td>";
    echo"<td>". $row['name']."</td>";
    echo"<td>physmark:</td>";
    echo"<td>".$row['phy']."</td>";
    echo"<td>chemmark:</td>";
    echo"<td>".$row['chem']."</td>";
    echo"<td>mathssmark:</td>";
    echo"<td>".$row['maths']."</td>";

}
echo "</table>";
echo"</body>";
echo "<center><a href='logout.php'>log out</a></center>";
?>