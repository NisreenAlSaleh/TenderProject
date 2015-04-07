<?php

 include 'DBconnection.php';
class organization {
   
 
         
         
         
    var $organization_name,$address,$email,$phone,$organization_description,$password,$organization_supportin_category;
     public function __construct() {
          
        
     }
     function  insert(){
      $connect2=  new createConnection ();
  $connect2->connectToDatabase();
  
 
         echo 'hallo this is insertion';
        
     $sql3=mysqli_query($connect2->conn,"INSERT INTO org_table(org_name,address,email,phone,org_disc,org_supp_cat)VALUES ('".$_POST['organizatoin_name']."','".$_POST['org_address']."','".$_POST['org_email']."','".$_POST['org_phone']."','".$_POST['organization_discription']."','".$_POST['organization_supportin_category']."')");
if($sql3){
    echo 'insertion succses';
}

     }
 function retrive($username=''){

   $connect2=  new createConnection ();
  $connect2->connectToDatabase();

     $sql = "SELECT * FROM org_table WHERE org_name='$username'";
$result = mysqli_query($connect2->conn,$sql);


if ( $result->num_rows >0)
    {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["org_id"]." </br>"."Organization Name: ".$row['org_name']."</br>"."Organization Phone :".$row['phone']."</br>"."email :".$row['email']."</br>";
           }
    }
else {
    echo "0 results";
     }
     $connect2->closeConnection();
 }
 
  
 function  check_db(){
     $connect2=  new createConnection ();
  $connect2->connectToDatabase();
  $username=$_POST['organizatoin_name'];
  $email=$_POST['org_email'];
  
$q= "SELECT org_name,email FROM org_table WHERE org_name='$username' AND email='$email'";
     $sql2=mysqli_query($connect2->conn,$q);
  $result=  mysqli_fetch_array($sql2);
   
    if($result[0]&&$result[1] ){
        echo 'you are already regesterd';
        
        
    }
    else{
      
      organization:: insert();
    }
 }
 function delete($org_name){
   $connect2=  new createConnection ();
  $connect2->connectToDatabase();
 $sql1="SELECT org_name FROM org_table WHERE org_name='$org_name'";
   $select=mysqli_query($connect2->conn,$sql1);
  $result=  mysqli_fetch_array($select);
  if($result[0]){
      
  $sql="DELETE FROM org_table WHERE org_name='$org_name'";
  $delete=mysqli_query($connect2->conn,$sql);
  if($delete){
      echo $org_name.'is DELETED';
  }
  }
  else{
      echo'no organization with this name existes ';
  }
  $connect2->closeConnection();
 }
 
 
 
 
 
   function update($orgname){
    $connect2=  new createConnection ();
  $connect2->connectToDatabase();
   
  $sql="SELECT org_id,org_name,phone,email,address,org_disc,org_supp_cat 
  FROM org_table WHERE org_name='$orgname'";

  $select=  mysqli_query($connect2->conn, $sql);

$res=mysqli_fetch_array($select);

$user_id=$res['org_id'];
           echo$user_id;
  if($select){
   
     ?>
      <form action="<?php echo '';?>"method="POST">
        <?php  
      while($row=  mysqli_fetch_array($select)){
          
        $org_name=$row['org_name'];
        $org_phone=$row['phone'];
        $org_email=$row['email'];
        $address=$row['address'];
        $org_disc=$row['org_disc'];
         $org_id=$row['org_id'];
         $org_supp_cat=$row['org_supp_cat'];

     
          echo"<tr>";
            echo"<lable>"."organization name"."</lable>";
          echo"<input type='text' name='org_name' value=' $org_name'>";
          echo"<lable>"."org phone"."</lable>";
          echo"<input type='text' name='phone' value=' $org_phone'>";
           echo"<lable>"." email"."</lable>";
          echo"<input type='text' name='email' value=' $org_email'>";
           echo"<lable>"."address"."</lable>";
          echo"<input type='text' name='address'value=' $address'>";
           echo"<lable>"."org discription"."</lable>";
          echo"<input type='text' name='org_disc' value=' $org_disc'>";
             echo"<lable>"."org dupporting category"."</lable>";
          echo"<input type='text' name='org_supp_cat' value=' $org_supp_cat'>";
           echo"<input type='hidden' name='user_id' value=' $org_id'>";
        
          
         
 echo"<td>" ."</td><td><input type='submit'  value='update'>". "</td>";
          echo"</form>";      
    
     
      }
  }
          
        if (isset($_POST['update'])){
            $org_name=$row['org_name'];
        $org_phone=$row['phone'];
        $org_email=$row['email'];
        $address=$row['address'];
        $org_disc=$row['org_disc'];
         $org_id=$row['org_id'];
         $org_supp_cat=$row['org_supp_cat'];

            
  

           echo 'mmmmmmmm';
           
     $sql="UPDATE user_profile SET org_name='$org_name',phone='$phone',email='$email',
      address='$address',org_disc='$org_disc',org_supp_cat='$org_supp_cat' WHERE org_id='$org_id'"; 
  
  
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


$organizatoin_name=$organization_supportin_category=$email=$address=$organization_discription=$phone=$password=$rpassword="";
$ename=$ecategory=$eaddress=$eemail=$ediscription=$ephone=$epassword=$erpassword=$pass="";
$erorrs=array(
    $ename=>'organization name is required',
    $ecategory=>'category is requierd',
    $eaddress=>'address is reqiured ',
    $eemail=>'email is required',
    $ediscription=>'discription is required'
);
 $var =true;
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
 if (!empty($_POST["organizatoin_name"])) {
      $organizatoin_name = ($_POST["organizatoin_name"]);
     
     
   } else {
    
    $ename='organization name is required';
	 $var=false;
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$organizatoin_name)) {
       $ename = "Only letters and white space allowed";
     }
   }

    if (empty($_POST["organization_supportin_category"])) {
    $ecategory= "organization is required";
     $var=false;

   } else {
     $organization_supportin_category= ($_POST["organization_supportin_category"]);
     // check if e-mail address is well-formed
if (!preg_match("/^[a-zA-Z ]*$/",$organization_supportin_category)) {
       $ecategory= "Only letters and white space allowed"; }
     }

    if (empty($_POST["org_email"])) {
     $eemail = "email name is required";
	 $var=false;
   } else {
     $email= ($_POST["org_email"]);
     // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $eemail = "Invalid email format";
     }

     }
if (empty($_POST["org_address"])) {
     $eaddress = "address is required";
	 $var=false;
   } else {
     $address= ($_POST["org_address"]);
  

   }
 if (empty($_POST["organization_discription"])) {
     $ediscription = "discription is required";
	 $var=false;
   } else {
     $organization_discription = ($_POST["organization_discription"]);
     // check if e-mail address is well-formed
    if (!preg_match("/^[a-zA-Z ]*$/",$organization_discription)) {
       $ediscription= "Only letters and white space allowed"; }
   }
if (empty($_POST["org_phone"])) {
     $ephone = "phone is required";
	 $var=false;
   } else {
     $phone= ($_POST["org_phone"]);
  

   }

 

	}
        return $var;
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
 if(empty($_POST['orgname']))  {
    echo'please enter an organization name ';
$var=false;
 }
   else {
      $orgname=$_POST['orgname'];
    
       }
       

    

}
return $var;
}
 }