<?php
class tender_grid_view {

    function __construct() {
       include('/general/grid.php');
include_once'\modle\tender.php'; 
include_once'\modle\DBconnection.php'; 
    }

function generate_grid(){

  $connect=  new createConnection ();
  $connect->connectToDatabase();
 $s="SELECT * FROM tender  ";
 $mydata=array(
 array('tender_id'=>'',
 'tender_name'=>'',
 'org_trade_mark'=>'',
 'start_date' => ' ',
'end_date'=>'',   
'invelope_hand_over'=>'', 
'invelope_opining'=>'', 
'tender_region'=>'', 
'tender_content'=>'', 
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
' tender_id'=>' Tender id',
 'tender_name' => 'Tender name ',
 'org_trade_mark ' => ' org. trade mark',
 'tender_region'=>'Tender region',
    
    
    'delete'=>'delete',
    'update'=>'update',
    'view'=>'view',
));
$dd->render1();

 


while($row=  mysqli_fetch_array($sql)){
 $delete="<a href='./index.php?url=tender_controler/delete/".$row['tender_id']."' value=\"delete\" \">delete</a>";
  $update="<a href='./index.php?url=tender_controler/update/".$row['tender_id']."' value=\"update\" \">update</a>";
   $view="<a href='./index.php?url=tender_controler/view/".$row['tender_id']."' value=\"view\" \">view</a>";
$data = array(
 array(
 'tid' =>$row['tender_id'],
 'tendername' => $row['tender_name'],
 'org_trade_mark' => $row['org_trade_mark'],
 'tender_region' =>$row['tender_region'],
 'invelope_hand_over'=>$row['invelope_hand_over'], 
'invelope_opining'=>$row['invelope_opining'],  
'tender_content'=>$row['tender_content'],    
'start_date' => $row['start_date'],
'delete'=>$delete,
'update'=>$update,
'view'=>$view,
 ),
 ); 
 
 


 $dg = new OPCDataGrid();
$dg->source($data);
$dg->fields(array(
'tid'=>' ',
 'tendername' => '  ',
 'invelope_hand_over' => ' ',
'invelope_opining'=>'',
    'delete'=>'',
    'update'=>'',
    'view'=>'',
 ));

 $dg->render2();

}
}
}

?>
