<?php
<<<<<<< HEAD
require_once('grid.php');



include_once'D:\wamp\www\tender_project\modle\user.php';
=======
require_once('modle/grid.php');



include_once'modle/user.php';
>>>>>>> origin/master
  $connect=  new createConnection ();
  $connect->connectToDatabase();
 $s="SELECT * FROM user_profile  ";
 $mydata=array(
 array('user_id'=>'',
 'user_name'=>'',
 'email'=>'',
 'f_name' => ' ',
<<<<<<< HEAD
=======
     'delete'=>'',
     'update'=>'',
     'view'=>'',
     
>>>>>>> origin/master
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
<<<<<<< HEAD
 'delete ' => ' delete',
 'update' => ' update ',
 'view' => 'view',
 
));
$dd->render1();
 $delete="<a href=\"\" value=\"delte\" \">delete</a>";
  $update="<input type=\"submit\" value=\"update\" \">";
   $view="<input type='submit' value='view' >";



while($row=  mysqli_fetch_array($sql)){
 
=======
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
>>>>>>> origin/master
$data = array(
 array(
 'uid' =>$row['user_id'],
 'username' => $row['user_name'],
 'f_name' => $row['first_name'],
 'l_name' =>$row['last_name'],
 'email' => $row['user_email'],
<<<<<<< HEAD
 'delete'=>$delete,
'update'=>$update,
'view'=>$view,
=======
     'delete'=>$delete,
     'update'=>$update,
     'view'=>$view,
>>>>>>> origin/master
 ),
 ); 
 
 


 $dg = new OPCDataGrid();
$dg->source($data);
$dg->fields(array(
'uid'=>' ',
 'username' => '  ',
 'email' => ' ',
<<<<<<< HEAD
'delete'=>'',
'update'=>'',
'view'=>'',
 ));
=======
'f_name'=>'',
    'delete'=>'',
    'update'=>'',
    'view'=>'',
 ));

>>>>>>> origin/master
 $dg->render2();



}
<<<<<<< HEAD
?>

    <?php

if($delete){
    $sql="DELETE FROM user_profile WHERE user_id='$uid'";
 $delete=  mysqli_query($connect->conn,$sql);
if($delete){
=======

/*
if($delete){
    $sql="DELETE FROM user_profile WHERE user_id=$data'['uid']'";
    
 $delete1=  mysqli_query($connect->conn,$sql);
if($delete1){
>>>>>>> origin/master
    echo'deleted';
}
    echo 'haloooo';
}
<<<<<<< HEAD

=======
*/
>>>>>>> origin/master








//$dg->addField('Full Name', 'full_name', '{f_name} {l_name}', array('before'=>'username'));





 
 
?>


