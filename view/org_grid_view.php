<?php
class org_grid_view {

    function __construct() {
       include('/general/grid.php');
include_once'/modle/organization.php'; 
include_once'/modle/DBconnection.php'; 
    }

function generate_grid(){
    echo $view="<a href='./index.php?url=org_controler/create/' value=\"create\" \">create</a>";

  $connect=  new createConnection ();
  $connect->connectToDatabase();
 $s="SELECT * FROM org_table  ";

 $mydata=array(
 array('org_id'=>'',
 'org_name'=>'',
 'address'=>'',
 ' email' => ' ',
     'phone'=>'',
 'org_disc'=>'',
 ' org_supp_cat' => ' ',
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
' org_id'=>' org id',
 'org_name' => 'org name ',
 'phone'=>'phone',
    'delete'=>'delete',
    'update'=>'update',
    'view'=>'view',
));
$dd->render1();

 


while($row=  mysqli_fetch_array($sql)){
 $delete="<a href='./index.php?url=org_controler/delete/".$row['org_id']."' value=\"delete\" \">delete</a>";
  $update="<a href='./index.php?url=org_controler/update/".$row['org_id']."' value=\"update\" \">update</a>";
   $view="<a href='./index.php?url=org_controler/view/".$row['org_id']."' value=\"view\" \">view</a>";
$data = array(
 array(
 'oid' =>$row['org_id'],
 'org_name' => $row['org_name'],
 'address' => $row['address'],
 'email' =>$row['email'],
 'phone' => $row['phone'],
     'delete'=>$delete,
     'update'=>$update,
     'view'=>$view,
 ),
 ); 
 
 


 $dg = new OPCDataGrid();
$dg->source($data);
$dg->fields(array(
'oid'=>' ',
 'org_name' => '  ',
'phone'=>' ',
 'delete'=>'',
 'update'=>'',
 'view'=>'',
 ));

 $dg->render2();


}
}
}
?>
