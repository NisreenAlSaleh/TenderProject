


        <form action="<?php echo'';?>"method="post" class="form-style-3 ">
<table>
    <tr><td> org_name </td><td><input type="text" name ="org_name" > </td><td>
<span class= "error">*<?php echo''  ; ?></span></td></tr>
<tr> <td> tender_name:</td><td> <input type="text" name="tender_name"> </td><td>
<span class= "error">*<?php echo ''; ?></span></td></tr>
<tr><td> org_trade_mark: </td><td><input type="text" name ="org_trade_mark"> </td><td>
<span class= "error">*<?php echo ''; ?></span></td></tr>
<tr><td> start_date: </td><td><input type="date" name ="start_date" > </td><td>
<span class= "error">*<?php echo ''; ?></span></th></tr>
<tr><td> end_date: </td><td><input type="date" name ="end_date" > </td><th>
<span class= "error">*<?php echo '' ; ?></span></td></tr>

 <!-- <span class= "error">*<?php echo ''; ?></span></th></tr> -->
<tr><td> invelope_hand_over: </td><td><input type="date" name ="invelope_hand_over" > </td><td>
<span class= "error">*<?php echo ''; ?></span></td></tr>
<tr><td> invelope_opening: </td><td><input type="date" name ="invelope_opining"> </td><td>
<span class= "error">*<?php echo ''  ; ?></span></td></tr>
<tr><td> tender_region </td><td><?php
include'/controler/lookup_gov_con.php';
new lookup_gov_con();
lookup_gov_con::view();
?></td><td>
<span class= "error">*<?php echo ''  ; ?></span></td></tr>



<tr><td> tender_content </td><td><input type="text" name ="tender_content" > </td><td>
<span class= "error">*<?php echo ''  ; ?></span></td></tr>


<tr><td> </td><td><input type="submit" name="submit" value="Register"> </td> </tr>
</table>
</form>
  













