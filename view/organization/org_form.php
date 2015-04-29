<div class="testbox">
        <form action="<?php echo'' ;?>"method="post">
<table>
<tr> <td> organizatoin_name:</td><td> <input type="text" name="organizatoin_name"value="<?php echo isset($_POST['organizatoin_name']) ? $_POST['organizatoin_name'] : '';?>"> </td><td>
<span class= "error"><?php echo !empty($error) ? '<img src="theams/img/err.gif" width="15px" height="15px">'. $error['organizatoin_name']:' '; ?></span></td></tr>


<tr><td> organization_supportin_category: </td><td><?php
include'/controler/lookup_cat_con.php';
new lookup_cat_con();
lookup_cat_con::view();
?>"> </td><td>
<span class= "error"><?php echo !empty($error) ? '<img src="theams/img/err.gif" width="15px" height="15px">'. $error['organization_supportin_category']:' '; ?></span></th></tr>

<tr><td> address: </td><td><input type="text" name ="org_address"value="<?php echo isset($_POST['org_address']) ? $_POST['org_address'] : '';?>"> </td><td>
<span class= "error"><?php echo !empty($error) ? '<img src="theams/img/err.gif" width="15px" height="15px">'. $error['address']:' '; ?></span></td></tr>

<tr><td> email: </td><td><input type="text" name ="org_email" value="<?php echo isset($_POST['org_email']) ? $_POST['org_email'] : '';?>"> </td><th>
<span class= "error"><?php echo !empty($error) ? '<img src="theams/img/err.gif" width="15px" height="15px">'. $error['email']:' '; ?></span></td></tr>


<tr><td> phone: </td><td><input type="text" name ="org_phone" value="<?php echo isset($_POST['org_phone']) ? $_POST['org_phone'] : '';?>"> </td><td>
<span class= "error"><?php echo !empty($error) ? '<img src="theams/img/err.gif" width="15px" height="15px">'. $error['phone']:' '; ?></span></td></tr>
<tr> <td> organization_discription: </td><td><input type="text" name="organization_discription"value="<?php echo isset($_POST['organization_discription']) ? $_POST['organization_discription'] : '';?>"> </td>
   <td><span class="error"> <?php echo !empty($error) ?  $error['organization_discription']:' ';?></span></td> </tr>
        

<tr><td> </td><td><input type="submit" name="submit" value="Regester" class="button"> </td> </tr>

</table>
</form>
  
</div>