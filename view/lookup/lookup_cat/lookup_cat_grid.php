<?php
class lookup1_grid_view {
    function __construct() {
       include('/general/grid.php');
include_once'\modle\lookup_cat_model.php'; 
include_once'\modle\DBconnection.php'; 
    }
function generate_grid(){
 echo $view="<a href='./index.php?url=lookup_cat_con/add/' value=\"create\" \">create</a>";
  $connect=  new createConnection ();
  $connect->connectToDatabase();
 $s="SELECT * FROM category  ";
 $mydata=array(
 array('cat_id'=>'',
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
' cat_id'=>' category id',
 'name' => 'category name ',
    'delete'=>'delete',
    'update'=>'update',
   
));
$dd->render1();
 
while($row=  mysqli_fetch_array($sql)){
 $delete="<a href='./index.php?url=lookup_cat_con/delete/".$row['cat_id']."' value=\"delete\" \">delete</a>";
  $update="<a href='./index.php?url=lookup_cat_con/update/".$row['cat_id']."' value=\"update\" \">update</a>";
   $view="<a href='./index.php?url=lookup_cat_con/view/".$row['cat_id']."' value=\"view\" \">view</a>";
$data = array(
 array(
 'cid' =>$row['cat_id'],
 'name' => $row['cat_name'],
'delete'=>$delete,
'update'=>$update,
 ),
 ); 
 
 
 $dg = new OPCDataGrid();
$dg->source($data);
$dg->fields(array(
'cid'=>' ',
 'name' => '  ',
 
    'delete'=>'',
    'update'=>'',
    
 ));
 $dg->render2();
}
}
}
?>