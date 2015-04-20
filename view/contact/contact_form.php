<html>
<?php
$eusername=$ephone=$eemail=$econtent='';

?>
    <div class="testbox">
    <form action="<?php echo'';?>"method="post">
<table>
    
<tr> <td> User Name</td><td> <input type="text" name="username"> </td><td>
<span class= "error"><?php echo '<img src="theams/img/err.gif" width="15px" height="15px">'.  $eusername; ?></span></td></tr>
<tr> <td> User phone</td><td> <input type="text" name="phone"> </td><td>
<span class= "error"><?php echo '<img src="theams/img/err.gif" width="15px" height="15px">'.  $ephone; ?></span></td></tr>
<tr> <td> User email</td><td> <input type="text" name="email"> </td><td>
<span class= "error"><?php echo '<img src="theams/img/err.gif" width="15px" height="15px">'.  $eemail; ?></span></td></tr>
<tr> <td> content</td><td> <input type="text" name="content" high="100" width="50"> </td><td>
<span class= "error"><?php echo '<img src="theams/img/err.gif" width="15px" height="15px">'.  $econtent; ?></span></td></tr>

<tr><td> </td><td><input type="submit" name="submit" value="Regester" class="button"> </td> </tr>
</table>
</form>

</html>
</div>