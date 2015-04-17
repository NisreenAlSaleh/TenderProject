
        <form action="<?php echo'' ;?>"method="post"class="form-style-3 ">
<table>
<tr> <td> organizatoin_name:</td><td> <input type="text" name="organizatoin_name"> </td><td>
<span class= "error">*<?php echo ''; ?></span></td></tr>


<tr><td>Organization supporting category </td><td><?php
include'/controler/lookup_cat_con.php';
$lookup_cat_con=new lookup_cat_con();
$lookup_cat_con->view();
?> </td><td>

<tr><td> address: </td><td><input type="text" name ="org_address"> </td><td>
<span class= "error">*<?php echo ''; ?></span></td></tr>

<tr><td> email: </td><td><input type="text" name ="org_email" > </td><th>
<span class= "error">*<?php echo '' ; ?></span></td></tr>

<tr> <td> organization_discription: </td><td><input type="text" name="organization_discription" </td>
    <td><span class="error"> <?php echo '';?></span></td> </tr>
        

<tr><td> phone: </td><td><input type="text" name ="org_phone" > </td><td>
<span class= "error">*<?php echo ''; ?></span></td></tr>



<tr><td> </td><td><input type="submit" name="submit" value="Register"> </td> </tr>

</table>
</form>
  












