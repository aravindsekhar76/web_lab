<?php
echo "<select name='sel'>";
while($row=mysqli_fetch_assoc($resu)){?>
    <option value="<?php echo $row['rollno']?>"> <?php echo $row['rollno'] ?> </option>
    <?php
    }?>

    <?php
    echo "</select>";
    ?>