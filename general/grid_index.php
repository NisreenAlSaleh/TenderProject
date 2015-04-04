<?php
require_once('grid.php');



include_once'D:\wamp\www\tender_project\modle\user.php';
  $connect=  new createConnection ();
  $connect->connectToDatabase();
 $s="SELECT * FROM user_profile  ";
 $mydata=array(
 array('user_id'=>'',
 'user_name'=>'',
 'email'=>'',
 'f_name' => ' ',
 ));
 
$sql=mysqli_query($connect->conn,$s);



?>

<?php
$dd = new OPCDataGrid();
$dd->source($mydata);
$dd->fields(array(
' user_id'=>' user id'."<span>",
 'user_name' => 'user name ',
 'email ' => ' email',
 'delete ' => ' delete',
 'update' => ' update ',
 'view' => 'view',
 
));
$dd->render1();
 $delete="<a href=\"\" value=\"delte\" \">delete</a>";
  $update="<input type=\"submit\" value=\"update\" \">";
   $view="<input type='submit' value='view' >";



while($row=  mysqli_fetch_array($sql)){
 
$data = array(
 array(
 'uid' =>$row['user_id'],
 'username' => $row['user_name'],
 'f_name' => $row['first_name'],
 'l_name' =>$row['last_name'],
 'email' => $row['user_email'],
 'delete'=>$delete,
'update'=>$update,
'view'=>$view,
 ),
 ); 
 
 


 $dg = new OPCDataGrid();
$dg->source($data);
$dg->fields(array(
'uid'=>' ',
 'username' => '  ',
 'email' => ' ',
'delete'=>'',
'update'=>'',
'view'=>'',
 ));
 $dg->render2();



}
?>

    <?php

if($delete){
    $sql="DELETE FROM user_profile WHERE user_id='$uid'";
 $delete=  mysqli_query($connect->conn,$sql);
if($delete){
    echo'deleted';
}
    echo 'haloooo';
}









//$dg->addField('Full Name', 'full_name', '{f_name} {l_name}', array('before'=>'username'));





 
 
?>


