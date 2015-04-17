


<<<<<<< HEAD

<?php

$eorg_name=$etendername=$eorgtradem=$estartdate=$eenddate=$eenvelopeho=$eenvelopeopen=$etenderregion="";

?>
<html>
<style type="text/css">
.form-style-3{
    max-width: 450px;
   font-family: cursive;
}
.form-style-3 label{
    display:block;
    margin-bottom: 10px;
}
.form-style-3 label > span{
    float: left;
    width: 100px;
    color: #2E4E4E;
    font-weight: bold;
    font-size: 13px;
    text-shadow: 1px 1px 1px #fff;
}
.form-style-3 fieldset{
    border-radius: 10px;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    margin: 0px 0px 10px 0px;
    border: 1px solid #7DB1B1;
    padding: 20px;
    background: #CEE2E2;
    box-shadow: inset 0px 0px 15px #AECECE;
    -moz-box-shadow: inset 0px 0px 15px #AECECE;
    -webkit-box-shadow: inset 0px 0px 15px #AECECE;
}
.form-style-3 fieldset legend{
    color: #2E4E4E;
    border-top: 1px solid #5C9D9D;
    border-left: 1px solid #5C9D9D;
    border-right: 1px solid #5C9D9D;
    border-radius: 5px 5px 0px 0px;
    -webkit-border-radius: 5px 5px 0px 0px;
    -moz-border-radius: 5px 5px 0px 0px;
    background: #DEEBEB;
    padding: 0px 8px 3px 8px;
    box-shadow: -0px -1px 2px #F1F1F1;
    -moz-box-shadow:-0px -1px 2px #F1F1F1;
    -webkit-box-shadow:-0px -1px 2px #F1F1F1;
    font-weight: normal;
    font-size: 12px;
}
.form-style-3 textarea{
    width:250px;
    height:100px;
}
.form-style-3 input[type=text],
.form-style-3 input[type=date],
.form-style-3 input[type=datetime],
.form-style-3 input[type=number],
.form-style-3 input[type=search],
.form-style-3 input[type=time],
.form-style-3 input[type=url],
.form-style-3 input[type=email],
.form-style-3 select, 
.form-style-3 textarea{
    border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border: 1px solid #AECECE;
    outline: none;
    color: #1C2F2F;
    padding: 5px 8px 5px 8px;
    box-shadow: inset 1px 1px 4px #AECECE;
    -moz-box-shadow: inset 1px 1px 4px #AECECE;
    -webkit-box-shadow: inset 1px 1px 4px #AECECE;
    background: #DEEBEB;
    width:initial;
}
.form-style-3  input[type=submit],
.form-style-3  input[type=button]{
    background: #DEEBEB;
    border: 1px solid #AECECE;
    padding: 5px 15px 5px 15px;
    color: #1C2F2F;
    box-shadow: inset -1px -1px 3px #AECECE;
    -moz-box-shadow: inset -1px -1px 3px #AECECE;
    -webkit-box-shadow: inset -1px -1px 3px #AECECE;
    border-radius: 3px;
    border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;    
    font-weight: bold;
}
.required{
    color:red;
    font-weight:normal;
}
</style>
<body>
<?php      

?>


        <form action="<?php echo'';?>"method="post">
<table>
    <tr><td> org_name </td><td><input type="text" name ="org_name" > </td><td>
<span class= "error">*<?php echo $eorg_name  ; ?></span></td></tr>
<tr> <td> tender_name:</td><td> <input type="text" name="tender_name"> </td><td>
<span class= "error">*<?php echo $etendername; ?></span></td></tr>
<tr><td> org_trade_mark: </td><td><input type="text" name ="org_trade_mark"> </td><td>
<span class= "error">*<?php echo $eorgtradem; ?></span></td></tr>
<tr><td> start_date: </td><td><input type="date" name ="start_date" > </td><td>
<span class= "error">*<?php echo $estartdate; ?></span></th></tr>
<tr><td> end_date: </td><td><input type="date" name ="end_date" > </td><th>
<span class= "error">*<?php echo $eenddate ; ?></span></td></tr>

 <!-- <span class= "error">*<?php echo $etendername; ?></span></th></tr> -->
<tr><td> invelope_hand_over: </td><td><input type="date" name ="invelope_hand_over" > </td><td>
<span class= "error">*<?php echo $eenvelopeho ; ?></span></td></tr>
<tr><td> invelope_opening: </td><td><input type="date" name ="invelope_opining"> </td><td>
<span class= "error">*<?php echo $eenvelopeopen  ; ?></span></td></tr>
<tr><td> tender_region </td><td><input type="text" name ="tender_region" > </td><td>
<span class= "error">*<?php echo $etenderregion  ; ?></span></td></tr>

<tr><td> tender_content </td><td><input type="text" name ="tender_content" > </td><td>
<span class= "error">*<?php echo $etenderregion  ; ?></span></td></tr>


<tr><td> </td><td><input type="submit" name="submit" value="Regester"> </td> </tr>
</table>
</form>
      
</body>
</html>
=======
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
?> </td><td>
<span class= "error">*<?php echo ''  ; ?></span></td></tr>



<tr><td> tender_content </td><td><input type="text" name ="tender_content" > </td><td>
<span class= "error">*<?php echo ''  ; ?></span></td></tr>


<tr><td> </td><td><input type="submit" name="submit" value="Register"> </td> </tr>
</table>
</form>
  
>>>>>>> origin/master













