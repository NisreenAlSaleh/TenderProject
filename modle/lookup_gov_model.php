<?php

include 'DBconnection.php';

 class lookup_gov_model{
       
   
   public function _construct(){
       
   }
 
   static function insert($name){
       
	$connect=  new createConnection ();
       $connect->connectToDatabase();
 
         $s1="INSERT INTO governerate(name) VALUES ('$name')";
          
         $sql1=  mysqli_query($connect->conn, $s1);
          if($sql1){
              echo 'insertion success ';
          }
          else{
              echo 'cant insert please try again';
          }
	             }
                     
        static function select(){
            
       $connect=  new createConnection ();
       $connect->connectToDatabase();
       
      $s2= "SELECT name FROM governerate";
     
    
$sql=  mysqli_query($connect->conn, $s2);
if ($sql->num_rows > 0) {
// output data of each row
while($row = $sql->fetch_assoc()) {
    echo'blalbabababababab000000000';
echo "<option value='$row[name]'>  $row[name] </option>";
                 }
}
else
{
echo "0 results";
}
    }

 
    
    static function update($name,$value){
        $connect=  new createConnection ();
       $connect->connectToDatabase();
      
       $s3 = "UPDATE governerate SET name='$name' WHERE name='$value' ";
       $sql3=mysqli_query($connect->conn,$s3);
        if($sql3){
              echo 'Updated successfully ';
          }
          else{
              echo 'cant Update please try again';
          }
       
    }
    static function delete($name){
        echo$name;
        $connect=  new createConnection ();
       $connect->connectToDatabase();
      
        $s4 = "DELETE FROM governerate WHERE name_id='$name'";
        $sql4=mysqli_query($connect->conn,$s4);
         if($sql4){
              echo 'Deleted successfully </br>';
          }
          else{
              echo 'Cant Delete please try again';
          
       }
    }
 
 }
?>