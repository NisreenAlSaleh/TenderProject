<?php

$eusername='';
$efirstname='';
$elastname=$eemail=$ephone=$epassword=$erpassword=$pass=$genderErr="";

?>

 <form action="<?php echo '' ;?>"method="post" class="form-style-3 ">
      
<table>
<tr> <td> username:</td><td> <input type="text" name="username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : '';?>"> </td><td>
<span class= "error">*<?php echo !empty($error) ?  $error['user_name']:''; ?></span></td></tr>

<tr> <td> organization name:</td><td> <input type="text" name="org_name" value="<?php echo isset($_POST['org_name']) ? $_POST['org_name'] : '';?>"> </td><td>
  <span class= "error">*<?php echo !empty($error) ?  $error['org_name']:''; ?></span></td></tr>

<tr><td> first_name: </td><td><input type="text" name ="firstname" value="<?php echo isset($_POST['firstname']) ? $_POST['firstname'] : '';?>"> </td><td>
<span class= "error">*<?php echo !empty($error) ?  $error['first_name']:''; ?></span></td></tr>

<tr><td> last_name: </td><td><input type="text" name ="lastname" value="<?php echo isset($_POST['lastname']) ? $_POST['lastname'] : '';?>" > </td><td>
<span class= "error">*<?php echo !empty($error) ?  $error['last_name']:'';; ?></span></th></tr>

<tr><td> email: </td><td><input type="text" name ="email" > </td><th>
<span class= "error">*<?php echo $eemail ; ?></span></td></tr>

<tr> <td> gender: </td><td><input type="radio" name="gender" value="female">Female</td> <td><span class="error"> <?php echo $genderErr;?></span></td> </tr>
<tr> <td>  </td><td><input type="radio" name="gender" value="male">Male</td><td>;
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














