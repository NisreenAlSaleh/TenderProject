<?php


include_once'modle\DBconnection.php';
 class lookup_area_model{
       
   
   public function _construct(){
       
   }
 
   static function insert($name){
       
	$connect=  new createConnection ();
       $connect->connectToDatabase();
        $s0= "SELECT name FROM area WHERE name ='$name'";
      
         $sql=  mysqli_query($connect->conn, $s0);
         $result=  mysqli_fetch_array($sql);
        if (!$result[0]) {
     
         $s1="INSERT INTO area(name) VALUES ('$name')";
        
         $sql1=  mysqli_query($connect->conn, $s1);
          if($sql1){
              echo 'insertion success ';
          }
          else{
              echo 'cant insert please try again';
          }
	             }
                     else{
                         echo 'this area already exists';
                     }
   }
        static function select(){
            
       $connect=  new createConnection ();
       $connect->connectToDatabase();
       
      $s2= "SELECT name FROM area";
     
    
$sql=  mysqli_query($connect->conn, $s2);
if ($sql->num_rows > 0) {
// output data of each row
while($row = $sql->fetch_assoc()) {
    
echo "<option value='$row[name]'>  $row[name] </option>";
                 }
}
else
{
echo "0 results";
}
    }

 
    
    static function update($value,$parm){
        $connect=  new createConnection ();
       $connect->connectToDatabase();
      
       $s3 = "UPDATE area SET name='$value' WHERE area_id='$parm' ";
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
      
        $s4 = "DELETE FROM area WHERE area_id='$name'";
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