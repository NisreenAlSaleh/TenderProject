<?php
class lookup1_grid_view {

    function __construct() {
include('/general/grid.php');
include_once'\modle\lookup_area_model.php'; 
include_once'\modle\DBconnection.php'; 
    }

function generate_grid(){
 echo $view="<a href='./index.php?url=lookup_area_con/add/' value=\"create\" \">create</a>";
  $connect=  new createConnection ();
  $connect->connectToDatabase();
 $s="SELECT * FROM area  ";
 $mydata=array(
 array('area_id'=>'',
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
' area_id'=>' area id',
 'name' => 'area name ',
    'delete'=>'delete',
    'update'=>'update',
   
));
$dd->render1();

 


while($row=  mysqli_fetch_array($sql)){
 $delete="<a href='./index.php?url=lookup_area_con/delete/".$row['area_id']."' value=\"delete\" \">delete</a>";
  $update="<a href='./index.php?url=lookup_area_con/update/".$row['area_id']."' value=\"update\" \">update</a>";
   $view="<a href='./index.php?url=lookup_area_con/view/".$row['area_id']."' value=\"view\" \">view</a>";
$data = array(
 array(
 'aid' =>$row['area_id'],
 'name' => $row['name'],

'delete'=>$delete,
'update'=>$update,

 ),
 ); 
 
 


 $dg = new OPCDataGrid();
$dg->source($data);
$dg->fields(array(
'aid'=>' ',
 'name' => '  ',
 
    'delete'=>'',
    'update'=>'',
    
 ));

 $dg->render2();

}
}
}

?>
