

<div class="testbox">
        <form action="<?php echo'';?>"method="post">
<table>
    <tr><td> org_name </td><td><input type="text" name ="org_name" value="<?php echo isset($_POST['org_name']) ? $_POST['org_name'] : '';?>"> </td><td>
<span class= "error"><?php echo !empty($error) ? '<img src="theams/img/err.gif" width="15px" height="15px">'. $error['org_name']:' '; ?></span></td></tr>
       
<tr> <td> tender_name:</td><td> <input type="text" name="tender_name"value="<?php echo isset($_POST['tender_name']) ? $_POST['tender_name'] : '';?>"> </td><td>
<span class= "error"><?php echo !empty($error) ? '<img src="theams/img/err.gif" width="15px" height="15px">'. $error['tender_name']:' '; ?></span></td></tr>

<tr><td> org_trade_mark: </td><td><input type="text" name ="org_trade_mark"value="<?php echo isset($_POST['org_trade_mark']) ? $_POST['org_trade_mark'] : '';?>"> </td><td>
<span class= "error"><?php echo !empty($error) ? '<img src="theams/img/err.gif" width="15px" height="15px">'. $error['org_trade_mark']:' '; ?></span></td></tr>


<tr><td> start_date: </td><td><input type="date" name ="start_date"value="<?php echo isset($_POST['start_date']) ? $_POST['start_date'] : '';?>" > </td><td>
<span class= "error"><?php echo !empty($error) ? '<img src="theams/img/err.gif" width="15px" height="15px">'. $error['start_date']:' '; ?></span></th></tr>

<tr><td> end_date: </td><td><input type="date" name ="end_date"value="<?php echo isset($_POST['end_date']) ? $_POST['end_date'] : '';?>" > </td><th>
<span class= "error"><?php echo !empty($error) ? '<img src="theams/img/err.gif" width="15px" height="15px">'. $error['end_date']:' '; ?></span></td></tr>

 <!-- <span class= "error">*<?php echo ''; ?></span></th></tr> -->
<tr><td> invelope_hand_over: </td><td><input type="date" name ="invelope_hand_over"value="<?php echo isset($_POST['invelope_hand_over']) ? $_POST['invelope_hand_over'] : '';?>" > </td><td>
<span class= "error"><?php echo !empty($error) ? '<img src="theams/img/err.gif" width="15px" height="15px">'. $error['invelope_hand_over']:' '; ?></span></td></tr>

<tr><td> invelope_opening: </td><td><input type="date" name ="invelope_opining"value="<?php echo isset($_POST['invelope_opining']) ? $_POST['invelope_opining'] : '';?>"> </td><td>
<span class= "error"><?php echo !empty($error) ? '<img src="theams/img/err.gif" width="15px" height="15px">'. $error['invelope_opining']:' '; ?></span></td></tr>

<tr><td> tender_region </td><td><?php
include'/controler/lookup_gov_con.php';
$lookup_gov_con=new lookup_gov_con();
$lookup_gov_con->view();
?> </td><td><span class= "error"><?php echo !empty($error) ? '<img src="theams/img/err.gif" width="15px" height="15px">'. $error['tender_region']:' '; ?></span></td></tr>




<tr><td> tender_content </td><td><input type="text" name ="tender_content"value="<?php echo isset($_POST['tender_content']) ? $_POST['tender_content'] : '';?>" > </td><td>
<span class= "error"><?php echo !empty($error) ? '<img src="theams/img/err.gif" width="15px" height="15px">'. $error['tender_content']:' '; ?></span></td></tr>


<tr><td> </td><td><input type="submit" name="submit" value="Regester" class="button" > </td> </tr>
</table>
</form>
  
</div>