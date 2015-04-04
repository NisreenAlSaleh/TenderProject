<?php

 include 'DBconnection.php';
class user {
   
 
         
         
         

     public function __construct() {
          
        
     }
     function  insert(){
      $connect=  new createConnection ();
  $connect->connectToDatabase();
 
      
        $org_name=$_POST['org_name'];
         
         $org_id="SELECT org_id FROM org_table WHERE org_name='$org_name'";
        
         
         $sql2=  mysqli_query($connect->conn, $org_id);
        $g=  mysqli_fetch_array($sql2);
        
        echo 'hallo this is insertion for the tender';
     $sql=mysqli_query($connect->conn,"INSERT INTO user_profile(user_name,user_password,user_phone,user_email,first_name,last_name,org_id)
         VALUES ('".$_POST['username']."','".$_POST['password']."','".$_POST['phone']."','".$_POST['email']."','".$_POST['firstname']."','".$_POST['lastname']."','".$g[0]."')");
if($sql){
    echo 'insertion succses';
}

     }
 function retrive($id=''){

   $connect=  new createConnection ();
  $connect->connectToDatabase();

     $sql = "SELECT * FROM user_profile WHERE user_name='$id'";
$query = mysqli_query($connect->conn,$sql);



if ( $query->num_rows >0)
    {
    
    // output data of each row
    while($row = $query->fetch_assoc()) {
        
        echo "User ID: " . $row["user_id"]."</br>". " User Nmae : " . $row["user_name"]. "  </br> "."  First Name:" . $row["first_name"]."</br> "."User Phone:".$row['user_phone']. "<br>";
    }
    }
else {
    echo "no match found";
     }
     $connect->closeConnection();
 }
 
  
 function  check_db(){
     $connect= new createConnection ();
  $connect->connectToDatabase();
  $username=$_POST['username'];
  $email=$_POST['email'];
  $q="SELECT user_name,user_email FROM user_profile WHERE user_name='$username' AND user_email='$email'";

    $sql2=mysqli_query($connect->conn,$q);
  
   
  $result=  mysqli_fetch_array($sql2);
     
    if($result[0] ){
        echo 'you are already regesterd';
        
        
    }
    else{
     
     user:: insert();
    }
    $connect->closeConnection();
   
 }
  function delete($username){
  $connect2=  new createConnection ();
  $connect2->connectToDatabase();
 $sql1="SELECT user_name FROM user_profile WHERE user_name='$username'";
   $select=mysqli_query($connect2->conn,$sql1);
  $result=  mysqli_fetch_array($select);
  if($result[0]){
      
  $sql="DELETE FROM user_profile WHERE user_name='$username'";
  $delete=mysqli_query($connect2->conn,$sql);
  if($delete){
      echo $username.'is DELETED';
  }
  }
  else{
      echo'no user with this name existes ';
  }
  $connect2->closeConnection();
  
  }

  
  
  
  function update($username){
      $connect2=  new createConnection ();
  $connect2->connectToDatabase();
   
  $sql="SELECT user_id,user_name,user_phone,user_email,first_name,last_name 
  FROM user_profile WHERE user_name='$username'";

  $select=  mysqli_query($connect2->conn, $sql);

$res=mysqli_fetch_array($select);

$user_id=$res['user_id'];
           echo$user_id;
  if($select){
   
     ?>
      <form action="<?php echo '';?>"method="POST">
        <?php  
      while($row=  mysqli_fetch_array($select)){
          
        $user_name=$row['user_name'];
        $user_phone=$row['user_phone'];
        $user_email=$row['user_email'];
        $first_name=$row['first_name'];
        $last_name=$row['last_name'];
     $user_id=$row['user_id'];

     
          echo"<tr>";
            echo"<lable>"."user name"."</lable>";
          echo"<input type='text' name='user' value=' $user_name'>";
          echo"<lable>"."user phone"."</lable>";
          echo"<input type='text' name='user_phone' value=' $user_phone'>";
           echo"<lable>"."user email"."</lable>";
          echo"<input type='text' name='user_email' value=' $user_email'>";
           echo"<lable>"."first name"."</lable>";
          echo"<input type='text' name='first_name'value=' $first_name'>";
           echo"<lable>"."last name"."</lable>";
          echo"<input type='text' name='last_name' value=' $last_name'>";
           echo"<input type='hidden' name='user_id' value=' $user_id'>";
        
          
         
 echo"<td>" ."</td><td><input type='submit'  value='update'>". "</td>";
          echo"</form>";      
    
     
      }
  }
          
        if (isset($_POST['update'])){
 
echo 'start 0';exit();            $user_name=$_POST['user_name'];
        $user_phone=$_POST['user_phone'];
        $user_email=$_POST['user_email'];
        $first_name=$_POST['first_name'];
        $last_name=$_POST['last_name'];
            
  

           echo 'mmmmmmmm';
           
     $sql="UPDATE user_profile SET user_name='$user_name',user_phone='$user_phone',user_email='$user_email',
      first_name='$first_name',last_name='$last_name' WHERE user_id='$user_id'"; 
  
  
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

$username=$firstname=$lastname=$email=$phone=$gender=$password=$rpassword="";
$eusername=$efirstname=$elastname=$eemail=$ephone=$epassword=$erpassword=$pass=$genderErr="";
 $var =true;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
 if (empty($_POST["username"])) {
     $eusername = "Name is required";
     echo $eusername;
	 $var=false;
   } else {
     $username = ($_POST["username"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
       $eusername = "Only letters and white space allowed";
     }
   }

    if (empty($_POST["firstname"])) {
     $efirstname = "firstname is required";
     $var=false;

   } else {
     $firstname= ($_POST["firstname"]);
     // check if e-mail address is well-formed
if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
       $efirstname= "Only letters and white space allowed"; }
     }

    if (empty($_POST["lastname"])) {
     $elastname = "last name is required";
	 $var=false;
   } else {
     $lastname= ($_POST["lastname"]);
     // check if e-mail address is well-formed
if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
       $elastname= "Only letters and white space allowed"; }
     }

 if (empty($_POST["email"])) {
     $eemail = "Email is required";
	 $var=false;
   } else {
     $email = ($_POST["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $eemail = "Invalid email format";
       $var=false;
     }
   }
if (empty($_POST["phone"])) {
     $ephone = "phone is required";
	 $var=false;
   } else {
     $phone= ($_POST["phone"]);
     // check if e-mail address is well-formed

   }
if (empty($_POST["gender"])) {
   $genderErr   = "gender is required";
	 $var=false;
   } else {
     $gender= ($_POST["gender"]);
     // check if e-mail address is well-formed

   }


if (empty($_POST["password"])) {
     $epassword= "password is required";
	 $var=false;
   } else {
     $password = ($_POST["password"]);
     // check if e-mail address is well-formed
     if (!user::valid_pass($password)){
       $epassword = "Invalid passwordformat";
	   $var=false;}
   
     else{
   if (empty($_POST["r_password"])) {
   $erpassword= "is required" ;
   $var=false;
   }
   else {

     $rpassword= ($_POST['r_password']);

if($rpassword!=$password){$pass="Not maching" ;$var=1;}

	}
	}
 


  
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
 
 

