<?php

$eusername='';
$efirstname='';
$elastname=$eemail=$ephone=$epassword=$erpassword=$pass=$genderErr="";

?>
<div class="testbox">
 <form action="<?php echo '' ;?>"method="post" >
      
<table>
<tr> <td> username:</td><td> <input type="text" name="username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : '';?>"> </td><td>
<span class= "error"><?php echo !empty($error) ?  $error['user_name']:' '; ?></span></td></tr>

<tr> <td> organization name:</td><td> <input type="text" name="org_name" value="<?php echo isset($_POST['org_name']) ? $_POST['org_name'] : '';?>"> </td><td>
  <span class= "error"><?php echo !empty($error)? '<img src="theams/img/err.gif" width="15px" height="15px">'. $error['org_name']:' '; ?></span></td></tr>

<tr><td> first_name: </td><td><input type="text" name ="firstname" value="<?php echo isset($_POST['firstname']) ? $_POST['firstname'] : '';?>"> </td><td>
<span class= "error"><?php echo !empty($error) ? '<img src="theams/img/err.gif" width="15px" height="15px">'. $error['first_name']:''; ?></span></td></tr>

<tr><td> last_name: </td><td><input type="text" name ="lastname" value="<?php echo isset($_POST['lastname']) ? $_POST['lastname'] : '';?>" > </td><td>
<span class= "error"><?php echo !empty($error) ? '<img src="theams/img/err.gif" width="15px" height="15px">'. $error['last_name']:''; ?></span></th></tr>

<tr><td> email: </td><td><input type="text" name ="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '';?> "> </td><th>
<span class= "error"><?php echo !empty($error) ? '<img src="theams/img/err.gif" width="15px" height="15px">'. $error['email']:''; ?></span></td></tr>
<div class="gender">
<tr> <td> gender: </td><td><input type="radio" name="gender" id="female" value=" <?php echo isset($_POST['gender']) ? $_POST['gender'] : '';?>">
        <label for="female" class="radio">Female</label></td> <td><span class="error"></span></td> </tr>
<tr> <td>  </td><td><input type="radio" name="gender" id="male" value=" <?php echo isset($_POST['gender']) ? $_POST['gender'] : '';?>">
        <label for="male" class="radio" >Male</label></td><td>
 <!-- <span class= "error">*<?php echo !empty($error) ? '<img src="theams/img/err.gif" width="15px" height="15px">'. $error['gender']:''; ?></span></th></tr> -->
</div>  
<tr><td> phone: </td><td><input type="text" name ="phone" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : '';?>"> </td><td>
<span class= "error"><?php echo !empty($error) ? '<img src="theams/img/err.gif" width="15px" height="15px">'. $error['phone']:''; ; ?></span></td></tr>

<tr><td> password: </td><td><input type="text" name ="password"value="<?php echo isset($_POST['password']) ? $_POST['password'] : '';?>"> </td><td>
<span class= "error"><?php echo !empty($error) ? '<img src="theams/img/err.gif" width="15px" height="15px">'. $error['password']:'';  ?></span></td></tr>

<tr><td> r_password </td><td><input type="text" name ="r_password" value="<?php echo isset($_POST['r_password']) ? $_POST['r_password'] : '';?>"> </td><td>
<span class= "error"><?php echo !empty($error) ? '<img src="theams/img/err.gif" width="15px" height="15px">'. $error['password']:'';   ?></span></td></tr>

<tr> <td></td> <td> <span class="erroe"> <?php echo !empty($error) ? '<img src="theams/img/err.gif" width="15px" height="15px">'. $error['password']:'';?> </td></tr>



<tr><td> </td><td><input type="submit" class="button" value="Regester" > </td> </tr>
</table>
</form>   

</div>

