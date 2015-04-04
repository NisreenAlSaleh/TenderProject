<?php

$eusername='';
$efirstname='';
$elastname=$eemail=$ephone=$epassword=$erpassword=$pass=$genderErr="";

?>

 <form action="<?php echo '' ;?>"method="post">
      
<table>
<tr> <td> username:</td><td> <input type="text" name="username"> </td><td>
<span class= "error">*<?php echo $eusername; ?></span></td></tr>
<tr> <td> organization name:</td><td> <input type="text" name="org_name"> </td><td>
<tr><td> first_name: </td><td><input type="text" name ="firstname"> </td><td>
<span class= "error">*<?php echo $efirstname; ?></span></td></tr>
<tr><td> last_name: </td><td><input type="text" name ="lastname" > </td><td>
<span class= "error">*<?php echo $elastname; ?></span></th></tr>
<tr><td> email: </td><td><input type="text" name ="email" > </td><th>
<span class= "error">*<?php echo $eemail ; ?></span></td></tr>
<tr> <td> gender: </td><td><input type="radio" name="gender" value="female">Female</td> <td><span class="error"> <?php echo $genderErr;?></span></td> </tr>
<tr> <td>  </td><td><input type="radio" name="gender" value="male">Male</td><td>
 <!-- <span class= "error">*<?php echo $eusername; ?></span></th></tr> -->
<tr><td> phone: </td><td><input type="text" name ="phone" > </td><td>
<span class= "error">*<?php echo $ephone ; ?></span></td></tr>
<tr><td> password: </td><td><input type="text" name ="password"> </td><td>
<span class= "error">*<?php echo $epassword  ; ?></span></td></tr>
<tr><td> r_password </td><td><input type="text" name ="r_password" > </td><td>
<span class= "error">*<?php echo $erpassword  ; ?></span></td></tr>

<tr> <td></td> <td> <span class="erroe"> <?php echo $pass;?> </td></tr>


<tr><td> </td><td><input type="submit" name="submit" value="Regester"> </td> </tr>
</table>
</form>
      














