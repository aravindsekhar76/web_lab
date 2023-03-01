<?php
session_start();
echo"<h1><marquee bgcolor='lightblue' onMouseOver='this.stop()'> welcome ". $_SESSION['uname']. "</marquee></h1><br>";
?>

<html>
    <head></head>
    <body bgcolor="lightgreen" >
        <form action="submitprocess.php" method="post">
            <center><h3>Mark Entry</h3>
                 <table border="2" width ="600px">
                <tr><th colspan="2">ENTER STUDENT DETAILS</th></tr>
                <tr><td>Roll no:</td><td><input type="text" name="rollno" required></td></tr>
                <tr><td>Name</td><td><input type="text" name="name" required></td></tr>
                <tr><td>physics</td><td><input type="text" name="phy" required></td></tr>
                <tr><td>chemistry</td><td><input type="text" name="chem" required></td></tr>
                <tr><td>maths</td><td><input type="text" name="maths" required></td></tr>
                <tr><td><input type="reset"></td><td><input type="submit" name="submit" value="upload"></td>
            </table>
            </center>
    </form>
        
    </body>
</html>