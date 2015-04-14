<?php
class lookup1_grid_view {

    function __construct() {
       include('/general/grid.php');
include_once'\modle\lookup_gov_model.php'; 
include_once'\modle\DBconnection.php'; 
    }

function generate_grid(){
 echo $view="<a href='./index.php?url=lookup_gov_con/add/' value=\"create\" \">create</a>";
  $connect=  new createConnection ();
  $connect->connectToDatabase();
 $s="SELECT * FROM governerate  ";
 $mydata=array(
 array('name_id'=>'',
 'name'=>'',
'delete'=>'',
'update'=>'',

     
 ));
 
$sql=mysqli_query($connect->conn,$s);



?>

<?php
$dd = new OPCDataGrid();
$dd->source($mydata);
$dd->fields(array(
' name_id'=>' Governerate id',
 'name' => 'Governerate name ',
    'delete'=>'delete',
    'update'=>'update',
   
));
$dd->render1();

 


while($row=  mysqli_fetch_array($sql)){
 $delete="<a href='./index.php?url=lookup_gov_con/delete/".$row['name_id']."' value=\"delete\" \">delete</a>";
  $update="<a href='./index.php?url=lookup_gov_con/update/".$row['name_id']."' value=\"update\" \">update</a>";
   $view="<a href='./index.php?url=lookup_gov_con/view/".$row['name_id']."' value=\"view\" \">view</a>";
$data = array(
 array(
 'gid' =>$row['name_id'],
 'name' => $row['name'],

'delete'=>$delete,
'update'=>$update,

 ),
 ); 
 
 


 $dg = new OPCDataGrid();
$dg->source($data);
$dg->fields(array(
'gid'=>' ',
 'name' => '  ',
 
    'delete'=>'',
    'update'=>'',
    
 ));

 $dg->render2();

}
}
}

?>
