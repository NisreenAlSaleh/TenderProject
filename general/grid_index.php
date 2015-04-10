<?php
require_once('modle/grid.php');



include_once'modle/user.php';
  $connect=  new createConnection ();
  $connect->connectToDatabase();
 $s="SELECT * FROM user_profile  ";
 $mydata=array(
 array('user_id'=>'',
 'user_name'=>'',
 'email'=>'',
 'f_name' => ' ',
     'delete'=>'',
     'update'=>'',
     'view'=>'',
     
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
 'f_nmae'=>'first name',
    'delete'=>'delete',
    'update'=>'update',
    'view'=>'view',
));
$dd->render1();

 


while($row=  mysqli_fetch_array($sql)){
 $delete="<a href='./index.php?url=user_controler/delete & user_id=".$row['user_id']."' value=\"delte\" \">delete</a>";
  $update="<input type=\"submit\" value=\"update\" \">";
   $view="<input type='submit' value='view' >";
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
'f_name'=>'',
    'delete'=>'',
    'update'=>'',
    'view'=>'',
 ));

 $dg->render2();



}

/*
if($delete){
    $sql="DELETE FROM user_profile WHERE user_id=$data'['uid']'";
    
 $delete1=  mysqli_query($connect->conn,$sql);
if($delete1){
    echo'deleted';
}
    echo 'haloooo';
}
*/








//$dg->addField('Full Name', 'full_name', '{f_name} {l_name}', array('before'=>'username'));





 
 
?>


