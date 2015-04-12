<?php

 include 'DBconnection.php';
class tender {
   
 
         
         
         
    var $tender_name,$org_trade_mark,$start_date,$end_date,$invelope_hand_over,$invelope_opining,$tender_region,$tender_content;
     public function __construct() {
          
        
     }
     function  insert(){
      $connect2=  new createConnection ();
  $connect2->connectToDatabase();
  
 $org_name=$_POST['org_name'];
        
         $org_id="SELECT org_id FROM org_table WHERE org_name='$org_name'";
         
         
         $sql2=  mysqli_query($connect2->conn, $org_id);
        $g=  mysqli_fetch_array($sql2);
        
     $insert=   "INSERT INTO tender(org_id,tender_name,org_trade_mark,start_date,end_date,invelope_hand_over,invelope_opining,tender_region,tender_content)
 VALUES ('".$g[0]."','".$_POST['tender_name']."','".$_POST['org_trade_mark']."','".$_POST['start_date']."','".$_POST['end_date']."','".$_POST['invelope_hand_over']."','".$_POST['invelope_opining']."','".$_POST['tender_region']."','".$_POST['tender_content']."')";
    
 $sql3=mysqli_query($connect2->conn,$insert);
 

 if($sql3){
    echo 'insertion succses';
}
else{
    echo'process not complete';
}

     }
<<<<<<< HEAD
 function retrive($username=''){
=======
 function view($parm){
>>>>>>> origin/master

   $connect2=  new createConnection ();
  $connect2->connectToDatabase();

<<<<<<< HEAD
     $sql = "SELECT * FROM tender WHERE tender_name='$username'";
$result = mysqli_query($connect2->conn,$sql);


if ( $result->num_rows > 0)
    {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["tender_id"]."</br>"."Name: " . $row["tender_name"]."</br>";
           }
    }
else {
    echo "0 results";
     }
=======
     $sql = "SELECT * FROM tender WHERE tender_id='$parm'";
      $query = mysqli_query($connect->conn,$sql);
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
 echo"</table>"; 
>>>>>>> origin/master
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
<<<<<<< HEAD
  function delete($tendername){
   $connect2=  new createConnection ();
  $connect2->connectToDatabase();
 $sql1="SELECT tender_name FROM tender WHERE tender_name='$tendername'";
=======
  function delete($parm){
   $connect2=  new createConnection ();
  $connect2->connectToDatabase();
 $sql1="SELECT tender_id FROM tender WHERE tender_id='$parm'";
>>>>>>> origin/master
   $select=mysqli_query($connect2->conn,$sql1);
  $result=  mysqli_fetch_array($select);
  if($result[0]){
      
<<<<<<< HEAD
  $sql="DELETE FROM utender WHERE tender_name='$tendername'";
  $delete=mysqli_query($connect2->conn,$sql);
  if($delete){
      echo $tendername.'is DELETED';
=======
  $sql="DELETE FROM tender WHERE tender_id='$parm'";
  $delete=mysqli_query($connect2->conn,$sql);
  if($delete){
      return true;
>>>>>>> origin/master
  }
  }
  else{
      echo'no tender with this name existes ';
  }
  $connect2->closeConnection();
  }
 
  
<<<<<<< HEAD
  function update($tender_name){
=======
  function update($parm){
>>>>>>> origin/master
      $connect2=  new createConnection ();
  $connect2->connectToDatabase();
   
  $sql="SELECT tender_id,tender_name,start_date,end_date,invelope_hand_over,invelope_opining,tender_content,tender_region 
  FROM tender WHERE tender_name='$tender_name'";

  $select=  mysqli_query($connect2->conn, $sql);

$res=mysqli_fetch_array($select);

$tender_id=$res['tender_id'];
           echo$tender_id;
  if($select){
   
     ?>
      <form action="<?php echo '';?>"method="POST">
        <?php  
      while($row=  mysqli_fetch_array($select)){
          
        $tender_name=$row['tender_name'];
        $start_date=$row['start_date'];
        $end_date=$row['end_date'];
        $invelope_hand_over=$row['invelope_hand_over'];
        $invelope_opining=$row['invelope_opining'];
        $tender_content=$row['tender_content'];
        $tender_region=$row['tender_region'];
     $tender_id=$row['tender_id'];

     
          echo"<tr>";
            echo"<lable>"."tender name"."</lable>";
          echo"<input type='text' name='tendername' value=' $tender_name'>";
          echo"<lable>"."start date"."</lable>";
          echo"<input type='text' name='startdate' value=' $start_date'>";
           echo"<lable>"."end date"."</lable>";
          echo"<input type='text' name='enddate' value=' $end_date'>";
           echo"<lable>"."invelope hand over"."</lable>";
          echo"<input type='text' name='inv_hand'value=' $invelope_hand_over'>";
           echo"<lable>"."invelope opining"."</lable>";
          echo"<input type='text' name='inv_opining' value=' $invelope_opining'>";
           echo"<lable>"."tender content"."</lable>";
               echo"<input type='text' name='content' value=' $tender_content'>";
                echo"<lable>"."tender region"."</lable>";
                    echo"<input type='text' name='region' value=' $tender_region'>";
           echo"<input type='hidden' name='user_id' value=' $tender_id'>";
        
          
         
 echo"<td>" ."</td><td><input type='submit'  value='update'>". "</td>";
          echo"</form>";      
    
     
      }
  }
          
        if (isset($_POST['update'])){
        $tender_name=$row['tendername'];
        $start_date=$row['startdate'];
        $end_date=$row['enddate'];
        $invelope_hand_over=$row['inv_hand'];
        $invelope_opining=$row['inv_opining'];
        $tender_content=$row['content'];
        $tender_region=$row['region'];
     $tender_id=$row['tender_id'];

  

           echo 'mmmmmmmm';
           
     $sql="UPDATE user_profile SET tender_name='$tender_name',start_date='$start_date',end_date='$end_date',
      invelope_hand_over='$invelope_hand_overe',invelope_opining='$invelope_opining',tender_content='$tender_content'
           ,tender_region='$tender_region 'WHERE tender_id='$tender_id'"; 
  
  
   echo $sql;
      $update=mysqli_query($connect2->conn,$sql);
      if($update){
          echo'table is updated';
      }
      else{
          echo'not updated';
      }
        }
        
  
  
  }
 
  function validate(){
      
$org_name=$tendername=$orgtradem=$startdate=$enddate=$envelopeho=$envelopeopen=$tenderregion=$tender_content="";
$eorg_name=$etendername=$eorgtradem=$estartdate=$eenddate=$eenvelopeho=$eenvelopeopen=$etenderregion="";
 $var =true;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     if (empty($_POST["org_name"])) {
     echo " Organization Name is required";
    
	 $var=false;
   }
   else{
       $org_name=$_POST['org_name'];
   }
    
 if (empty($_POST["tender_name"])) {
     $etendername = " Tendr Name is required";
    
	 $var=false;
   } else {
     $tendername = ($_POST["tender_name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$tendername)) {
       $etendername = "Only letters and white space allowed";
     }
   }

    if (empty($_POST["org_trade_mark"])) {
     $eorgtradem = " orgtradem is required";
     $var=false;

   } else {
     $orgtradem= ($_POST["org_trade_mark"]);
     
if (!preg_match("/^[a-zA-Z ]*$/",$orgtradem)) {
       $eorgtradem= "Only letters and white space allowed"; }
     }

    if (empty($_POST["start_date"])) {
     $estartdate = "start date is required";
	 $var=false;
   } else {
     $startdate= ($_POST["start_date"]);
     
}
	     if (empty($_POST["end_date"])) {
     $eenddate = "end date is required";
	 $var=false;
   } else {
     $enddate= ($_POST["end_date"]);
  }

    if (empty($_POST["invelope_hand_over"])) {
     $eenvelopeho = "envelopeho is required";
	 $var=false;
   } else {
     $envelopeho= ($_POST["invelope_hand_over"]);
     

     }
	 
	     if (empty($_POST['invelope_opining'])) {
     $eenvelopeopen = "envelopeopen is required";
	 $var=false;
   } else {
     $envelopeopen= ($_POST['invelope_opining']);
     
}
	     if (empty($_POST["tender_region"])) {
     $etenderregion = " tenderregion is required";$var=false;

   } else {
     $tenderregion= ($_POST["tender_region"]);
     
if (!preg_match("/^[a-zA-Z ]*$/",$tenderregion)) {
       $etenderregion= "Only letters and white space allowed"; 
	   $var=false;}
    }
	 
	     if (empty($_POST["tender_content"])) {
     $etenderregion = " please add your tender content ";$var=false;

   } else {
     $tender_content= ($_POST["tender_content"]);
   }

    

	
}
if($var==true){
return $var;
}
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
 }