<html>
<?php
$eusername=$ephone=$eemail=$econtent='';

?>
    <?php
 

    
    ?>
    <form action="<?php echo'';?>"method="post">
<table>
    
<tr> <td> User Name</td><td> <input type="text" name="username"> </td><td>
<span class= "error">*<?php echo $eusername; ?></span></td></tr>
<tr> <td> User phone</td><td> <input type="text" name="phone"> </td><td>
<span class= "error">*<?php echo $ephone; ?></span></td></tr>
<tr> <td> User email</td><td> <input type="text" name="email"> </td><td>
<span class= "error">*<?php echo $eemail; ?></span></td></tr>
<tr> <td> content</td><td> <input type="text" name="content" high="100" width="50"> </td><td>
<span class= "error">*<?php echo $econtent; ?></span></td></tr>

<tr><td> </td><td><input type="submit" name="submit" value="Regester"> </td> </tr>
</table>
</form>

</html>