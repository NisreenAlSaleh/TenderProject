<?php

 include 'DBconnection.php';
class tender {
   
 
         
         
         
    var $tender_name,$org_trade_mark,$start_date,$end_date,$invelope_hand_over,$invelope_opining,$tender_region,$tender_content,$tender_catt;
     public function __construct() {
          
        
     }
     function  insert(){
      $connect2=  new createConnection ();
  $connect2->connectToDatabase();
  
 $org_name=$_POST['org_name'];
        
         $org_id="SELECT org_id FROM org_table WHERE org_name='$org_name'";
         
         
         $sql2=  mysqli_query($connect2->conn, $org_id);
        $g=  mysqli_fetch_array($sql2);
        
     $insert=   "INSERT INTO tender(org_id,tender_name,org_trade_mark,start_date,end_date,invelope_hand_over,invelope_opining,tender_region,tender_content,tender_catt)
 VALUES ('".$g[0]."','".$_POST['tender_name']."','".$_POST['org_trade_mark']."','".$_POST['start_date']."','".$_POST['end_date']."','".$_POST['invelope_hand_over']."','".$_POST['invelope_opining']."','".$_POST['sel']."','".$_POST['tender_content']."','".$_POST['tender_catt']."')";
    
 $sql3=mysqli_query($connect2->conn,$insert);
 

 if($sql3){
    echo 'insertion succses';
}
else{
    echo'process not complete';
}

     }
 function view($parm){

   $connect2=  new createConnection ();
  $connect2->connectToDatabase();

     $sql = "SELECT * FROM tender WHERE tender_id='$parm'";
      $query = mysqli_query($connect2->conn,$sql);
     $mydata=  mysqli_fetch_array($query);
     echo"<table>";
      echo"<tr>";
      echo"<th>"."<lable>"."tender id"."</lable>"."</th>";
          echo"<td>".$mydata['tender_id']."</td>";
           echo"</tr>";
          echo"<tr>";
            echo"<th>"."<lable>"."tender name"."</lable>"."</th>";
          echo"<td>".$mydata['tender_name']."</td>";
          echo"</tr>";
          echo"<tr>";
          echo"<th>"."<lable>"."org. trade mark"."</lable>"."</th>";
          echo"<td>".$mydata['org_trade_mark']."</td>";
          echo"</tr>";
          echo"<tr>";
           echo"<th>"."<lable>"."start date"."</lable>"."</th>";
          echo"<td>".$mydata['start_date']."</td>";
          echo"</tr>";
          echo"<tr>";
           echo"<th>"."<lable>"."End date"."</lable>"."</th>";
          echo"<td>". $mydata['end_date']."</td>";
          echo"</tr>";
          echo"<tr>";
           echo"<th>"."<lable>"."inv. hand over"."</lable>"."</th>";
          echo"<td>".$mydata['invelope_hand_over']."</td>";
          echo"</tr>";
          echo"<tr>";
            echo"<th>"."<lable>"."inv. opining"."</lable>"."</th>";
          echo"<td>".$mydata['invelope_opining']."</td>";
           echo"</tr>";
          echo"<tr>";
           echo"<th>"."<lable>"."tender region"."</lable>"."</th>";
          echo"<td>".$mydata['tender_region']."</td>";
           echo"</tr>";
          echo"<tr>";
           echo"<th>"."<lable>"."tender content"."</lable>"."</th>";
          echo"<td>".$mydata['tender_content']."</td>";
           
          echo"</tr>"; 
          echo"<tr>";
           echo"<th>"."<lable>"."tender category"."</lable>"."</th>";
          echo"<td>".$mydata['tender_catt']."</td>";
           echo"</tr>";
 echo"</table>"; 
     $connect2->closeConnection();
 }
 
  
 function  check_db(){
     
     $connect3=  new createConnection ();
  $connect3->connectToDatabase();
  $tender_name=$_POST['tender_name'];
 $org_trade_mark=$_POST['org_trade_mark'];
  
$q= "SELECT tender_name,org_trade_mark FROM tender WHERE tender_name='$tender_name' AND org_trade_mark='$org_trade_mark' ";

     $sql2=mysqli_query($connect3->conn,$q);
  $result=  mysqli_fetch_array($sql2);
  
    if($result[0] ){
        echo 'you are already regesterd';
       
        
    }
    else{
      
      tender:: insert();
    }
 }
  function delete($parm){
   $connect2=  new createConnection ();
  $connect2->connectToDatabase();
 $sql1="SELECT tender_id FROM tender WHERE tender_id='$parm'";
   $select=mysqli_query($connect2->conn,$sql1);
  $result=  mysqli_fetch_array($select);
  if($result[0]){
      
  $sql="DELETE FROM tender WHERE tender_id='$parm'";
  $delete=mysqli_query($connect2->conn,$sql);
  if($delete){
      return true;
  }
  }
  else{
      echo'no tender with this name existes ';
  }
  $connect2->closeConnection();
  }
 
  
  function update($parm){
      $connect2=  new createConnection ();
  $connect2->connectToDatabase();
   
  $sql="SELECT tender_id,tender_name,start_date,end_date,invelope_hand_over,invelope_opining,tender_content,tender_region ,tender_catt
  FROM tender WHERE tender_id='$parm'";

  $select=  mysqli_query($connect2->conn, $sql);




  if($select){
   
     ?>
      <form action="<?php echo '';?>"method="post">
        <?php  
      while($row=  mysqli_fetch_array($select)){
          
        $tender_name=$row['tender_name'];
        $start_date=$row['start_date'];
        $end_date=$row['end_date'];
        $invelope_hand_over=$row['invelope_hand_over'];
        $invelope_opining=$row['invelope_opining'];
        $tender_content=$row['tender_content'];
        $tender_region=$row['tender_region'];
        $tender_region=$row['tender_catt'];
        
        
      echo"<table>";
          echo"<tr>";
            echo"<th>"."<lable>"."tender name"."</lable>"."</th>";
          echo"<td>"."<input type='text' name='tendername' value=' $tender_name'>"."</td>";
          echo"</tr>";
          echo"<tr>";
          echo"<th>"."<lable>"."start date"."</lable>"."</th>";
          echo"<td>"."<input type='text' name='startdate' value=' $start_date'>"."</td>";
          echo"</tr>";
          echo"<tr>";
           echo"<th>"."<lable>"."end date"."</lable>"."</th>";
          echo"<td>"."<input type='text' name='enddate' value=' $end_date'>"."</td>";
          echo"</tr>";
          echo"<tr>";
           echo"<th>"."<lable>"."invelope hand over"."</lable>"."</th>";
          echo"<td>"."<input type='text' name='inv_hand'value=' $invelope_hand_over'>"."</td>";
          echo"</tr>";
          echo"<tr>";
          echo"<th>"."<lable>"."invelope opining"."</lable>"."</th>";
          echo"<td>"."<input type='text' name='inv_opining' value=' $invelope_opining'>"."</td>";
          echo"</tr>";
          echo"<tr>";
          echo"<th>"."<lable>"."tender content"."</lable>"."</th>";
          echo"<td>"."<input type='text' name='content' value=' $tender_content'>"."</td>";
          echo"</tr>";
          echo"<tr>";
          echo"<th>"."<lable>"."tender region"."</lable>"."</th>";
          echo"<td>"."<input type='text' name='region' value=' $tender_region'>"."</td>";
         echo"</tr>";
          echo"<tr>";
          echo"<th>"."<lable>"."tender category"."</lable>"."</th>";
          echo"<td>"."<input type='text' name='category' value=' $tender_catt'>"."</td>";
         echo"</tr>";
         
         
 
         echo"<td>" ."</td><td><input type='submit'  value='update'>". "</td>";
         echo"</table>";
         echo"</form>";      
    
     
      }
  }
          
        if (isset($_POST['tendername'])){
                     if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $tender_name=$row['tendername'];
        $start_date=$row['startdate'];
        $end_date=$row['enddate'];
        $invelope_hand_over=$row['inv_hand'];
        $invelope_opining=$row['inv_opining'];
        $tender_content=$row['content'];
        $tender_region=$row['region'];
        $tender_region=$row['category'];

  

           
     $sql="UPDATE tender SET tender_name='$tender_name',start_date='$start_date',end_date='$end_date',
      invelope_hand_over='$invelope_hand_over',invelope_opining='$invelope_opining',tender_content='$tender_content'
           ,tender_region='$tender_region ,tender_catt='$tender_catt'WHERE tender_id='$parm'"; 
  
  
   echo $sql;
      $update=mysqli_query($connect2->conn,$sql);
      if($update){
          return true;
      }
      else{
          echo'failed to update the table';
      }
        }
        
  
        }
  }
 
  function validate(){
      
$org_name=$tendername=$orgtradem=$startdate=$enddate=$envelopeho=$envelopeopen=$tenderregion=$tender_content=$sel=$tendercatt="";

$error=array(
    'tender_name'=>'',
    'org_name'=>'',
    'org_trade_mark'=>'',
     'start_date'=>'',
     'end_date'=>'',
     'invelope_hand_over'=>'',
     'invelope_opining'=>'',
     'tender_region'=>'',
     'tender_content'=>'',
    'tender_catt'=>'',
     
 );

if ($_SERVER["REQUEST_METHOD"] == "POST") {
     if (empty($_POST["org_name"])) {
     $error['org_name']= " Organization Name is required";
    
	 
   }
   else{
       $org_name=$_POST['org_name'];
   }
    
 if (empty($_POST["tender_name"])) {
     $error['tender_name'] = " Tendr Name is required";
    
	 
   } 
   else {
     $tendername = ($_POST["tender_name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$tendername)) {
       $error['tender_name'] = "Only letters and white space allowed";
     }
   }

    if (empty($_POST["org_trade_mark"])) {
     $error['org_trade_mark'] = " orgtradem is required";
   

   } else {
     $orgtradem= ($_POST["org_trade_mark"]);
     
if (!preg_match("/^[a-zA-Z ]*$/",$orgtradem)) {
       $error['org_trade_mark']= "Only letters and white space allowed"; }
     }

    if (empty($_POST["start_date"])) {
     $error['start_date'] = "start date is required";
	 
   } else {
     $startdate= ($_POST["start_date"]);
     
   }
 if (empty($_POST["end_date"])) {
     $error['end_date'] = "end date is required";
	
   } else {
     $enddate= ($_POST["end_date"]);
  }

    if (empty($_POST["invelope_hand_over"])) {
     $error['invelope_hand_over'] = "envelopeho is required";
	 
   } else {
     $envelopeho= ($_POST["invelope_hand_over"]);
     

     }
	 
	     if (empty($_POST['invelope_opining'])) {
     $error['invelope_opining']= "envelopeopen is required";
	
   } else {
     $envelopeopen= ($_POST['invelope_opining']);
     
}
if(!empty($_POST['sel'])){
$sel=$_POST['sel'];

}
else{
    $error['tender_region']='please select a region';
    
}

    
}

	     if (empty($_POST["tender_content"])) {
   $error['tender_content'] = "  ";

   } else {
     $tender_content= ($_POST["tender_content"]);
   }
   if(!empty($_POST['sel'])){
$sel=$_POST['sel'];

}
else{
    $error['tender_catt']='please select a category';
    
}
return $error;
  

  
  }
function valid_pass($candidate) {
    $matches=" ";
    if (!preg_match_all('$\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])(?=\S*[\W])\S*$', $candidate,$matches))
        return FALSE;
    return TRUE;

}


function validate_d_u(){
$var=true;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 if(empty($_POST['username']))  {
    echo'please enter a user name ';
$var=false;
 }
   else {
      $username=$_POST['username'];
    
       }
       

    

}
return $var;

}

function tt($gover,$type){echo $gover;echo '</br>';echo $type;}


function view_tender($gover,$type){
   
        $connect2=  new createConnection ();
  $connect2->connectToDatabase();
  if($gover==null && $type==null){
      $q="SELECT tender_name,tender_content FROM tender";
     // echo $q;exit();
      $query=  mysqli_query($connect2->conn, $q)or die("Error: ".mysqli_error($connect2->conn));
      
      
  }
  elseif($gover!=null & $type==null){
     $q="SELECT tender_name,tender_content FROM tender WHERE tender_region='$gover'";
      $query=  mysqli_query($connect2->conn, $q)or die("Error: ".mysqli_error($connect2->conn)); 
  }
   elseif($gover==null & $type!=null){
     $q="SELECT tender_name,tender_content FROM tender WHERE tender_catt='$type'";
      $query=  mysqli_query($connect2->conn, $q)or die("Error: ".mysqli_error($connect2->conn)); 
  }
   elseif($gover!=null & $type!=null){
     $q="SELECT tender_name,tender_content FROM tender WHERE tender_catt='$type' AND tender_region='$gover'";
      $query=  mysqli_query($connect2->conn, $q)
  or die("Error: ".mysqli_error($connect2->conn)); 
  }
  
 // print_r($result);
 
  while($result=  mysqli_fetch_array($query)) {
echo '<div class="t">';
      echo 'Tender Name :'.$result['tender_name']." </br>".'Tender content :'.$result['tender_content']."</br>";
     
      echo '</div>';
      
  }
 }
}