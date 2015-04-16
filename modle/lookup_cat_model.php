<?php


include_once'modle\DBconnection.php';
 class lookup_cat_model{
       
   
   public function _construct(){
       
   }
 
   static function insert($name){
       
	$connect=  new createConnection ();
       $connect->connectToDatabase();
 
         $s1="INSERT INTO category(name) VALUES ('$name')";
          
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
       
      $s2= "SELECT name FROM category";
     
    
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
      
       $s3 = "UPDATE category SET name='$value' WHERE cat_id='$parm' ";
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
      
        $s4 = "DELETE FROM category WHERE cat_id='$name'";
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