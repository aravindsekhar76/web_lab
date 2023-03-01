<html>
    <body bgcolor="lightblue">
        <form action="loginprocess.php" method="post">
            <center>
            <table border="2" align="center">
                <caption><h3>LOGIN_HERE</h3></caption>
                <tr><th colspan="2">enter your details</th></tr>
                <tr><td>Username</td><td><input type="text" name="uname" placeholder="username" required</td></tr>
                <tr><td>Password</td><td><input type="password" name="pass" placeholder="password" required</td></tr>
                <tr><td><input type="reset"  value="reset"</td>
                <td><input type="submit" name="submit" value="login"</td></tr>
                </center>
                
            </table>
            <?php
                $con=new mysqli("localhost","root","","test");
                if($con){
                $q="select distinct username from login";
                $res=mysqli_query($con,$q);
                
                if(mysqli_num_rows($res)){
                    echo "<select name='sub' >";
        
                    while($row=$con->fetch_assoc()){
                        
                        echo "<option value=".$row['username'].">".$row['username']."</option>";
                    }
                    echo "</select>";

                }
                else{
                    echo"<script> alert('no names')</script>";
                }}else{
                    echo "connection failed";
                }
                ?>
        </form>
        
    </body>
</html>