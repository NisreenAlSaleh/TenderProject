<?php
class user_grid_view {

    function __construct() {
       include('/general/grid.php');
include_once'/modle/user.php'; 
include_once'/modle/DBconnection.php'; 
    }

function generate_grid(){
    echo'<div class="create">';
    echo $view="<a href='./index.php?url=user_controler/create/' value=\"create\" \">"
            . "<img src='theams/img/create-button.jpg' height='50px' width='110px'></a>";
     echo'</div>';
    
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
' user_id'=>' user id',
 'user_name' => 'user name ',
 'f_nmae'=>'first name',
    'delete'=>'delete',
    'update'=>'update',
    'view'=>'view',
));
//echo '<div class="gird-div">';
echo $dd->render1();

 


while($row=  mysqli_fetch_array($sql)){
 $delete="<a href='./index.php?url=user_controler/delete/".$row['user_id']."' value=\"delete\" \">"
         . "<img src='theams/img/d.png' height='20px' width='30px'></a>";
  $update="<a href='./index.php?url=user_controler/update/".$row['user_id']."' value=\"update\" \">"
          . "<img src='theams/img/edit-icon.gif' height='20px' width='30px'></a>";
   $view="<a href='./index.php?url=user_controler/view/".$row['user_id']."' value=\"view\" \">"
           . "<img src='theams/img/v.png' height='20px' width='30px'></a>"; 

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
'f_name'=>'',
    'delete'=>'',
    'update'=>'',
    'view'=>'',
 ));

 echo $dg->render2();

//echo '</div>';

}
echo '</table>';
}
}
?>
