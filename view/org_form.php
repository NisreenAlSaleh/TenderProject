<?php

$ename=$ecategory=$eaddress=$eemail=$ediscription=$ephone=$epassword=$erpassword=$pass="";
 


?>


        <form action="<?php echo'' ;?>"method="post">
<table>
<tr> <td> organizatoin_name:</td><td> <input type="text" name="organizatoin_name"> </td><td>
<span class= "error">*<?php echo $ename; ?></span></td></tr>


<tr><td> organization_supportin_category: </td><td><input type="text" name ="organization_supportin_category" > </td><td>
<span class= "error">*<?php echo $ecategory; ?></span></th></tr>

<tr><td> address: </td><td><input type="text" name ="org_address"> </td><td>
<span class= "error">*<?php echo $eaddress; ?></span></td></tr>

<tr><td> email: </td><td><input type="text" name ="org_email" > </td><th>
<span class= "error">*<?php echo $eemail ; ?></span></td></tr>

<tr> <td> organization_discription: </td><td><input type="text" name="organization_discription" </td>
    <td><span class="error"> <?php echo $ediscription;?></span></td> </tr>
        

<tr><td> phone: </td><td><input type="text" name ="org_phone" > </td><td>
<span class= "error">*<?php echo $ephone ; ?></span></td></tr>



<tr><td> </td><td><input type="submit" name="submit" value="Regester"> </td> </tr>

</table>
</form>
      
</body>
</html>













