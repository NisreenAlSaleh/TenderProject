<?php

<<<<<<< HEAD
 include 'DBconnection.php';
class user {
   
 
         
         
         

     public function __construct() {
          
        
     }
     function  insert(){
      $connect=  new createConnection ();
  $connect->connectToDatabase();
 
      
        $org_name=$_POST['org_name'];
=======
 include 'modle/DBconnection.php';
class user {
 
function __construct() {
          
        
            }
function  insert(){
         $connect=  new createConnection ();
         $connect->connectToDatabase();
         $org_name=$_POST['org_name'];
>>>>>>> origin/master
         
         $org_id="SELECT org_id FROM org_table WHERE org_name='$org_name'";
        
         
         $sql2=  mysqli_query($connect->conn, $org_id);
<<<<<<< HEAD
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
=======
         $g=  mysqli_fetch_array($sql2);
        
         echo 'hallo this is insertion for the tender';
         $sql=mysqli_query($connect->conn,"INSERT INTO user_profile(user_name,user_password,user_phone,user_email,first_name,last_name,org_id)
         VALUES ('".$_POST['username']."','".$_POST['password']."','".$_POST['phone']."','".$_POST['email']."','".$_POST['firstname']."','".$_POST['lastname']."','".$g[0]."')");
         if($sql){
         echo 'insertion succses';
        }

        }
function view($parm){

         $connect=  new createConnection ();
         $connect->connectToDatabase();
         $sql = "SELECT * FROM user_profile ";
         $query = mysqli_query($connect->conn,$sql);
     $mydata=  mysqli_fetch_array($query);
     echo"<table>";
      echo"<tr>";
      echo"<th>"."<lable>"."user id"."</lable>"."</th>";
          echo"<td>".$mydata['user_id']."</td>";
           echo"</tr>";
          echo"<tr>";
            echo"<th>"."<lable>"."user name"."</lable>"."</th>";
          echo"<td>".$mydata['user_name']."</td>";
          echo"</tr>";
          echo"<tr>";
          echo"<th>"."<lable>"."user phone"."</lable>"."</th>";
          echo"<td>".$mydata['user_phone']."</td>";
          echo"</tr>";
          echo"<tr>";
           echo"<th>"."<lable>"."user email"."</lable>"."</th>";
          echo"<td>".$mydata['user_email']."</td>";
          echo"</tr>";
          echo"<tr>";
           echo"<th>"."<lable>"."first name"."</lable>"."</th>";
          echo"<td>". $mydata['first_name']."</td>";
          echo"</tr>";
          echo"<tr>";
           echo"<th>"."<lable>"."last name"."</lable>"."</th>";
          echo"<td>".$mydata['last_name']."</td>";
          echo"</tr>";
          echo"<tr>";
            echo"<th>"."<lable>"."org. name"."</lable>"."</th>";
          echo"<td>".$mydata['organization_name']."</td>";
           
          echo"</tr>";          
 echo"</table>"; 
>>>>>>> origin/master
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
<<<<<<< HEAD
  function delete($username){
  $connect2=  new createConnection ();
  $connect2->connectToDatabase();
 $sql1="SELECT user_name FROM user_profile WHERE user_name='$username'";
=======
  function delete($parm){
  $connect2=  new createConnection ();
  $connect2->connectToDatabase();
  
 $sql1="SELECT user_id FROM user_profile WHERE user_id='$parm'";
>>>>>>> origin/master
   $select=mysqli_query($connect2->conn,$sql1);
  $result=  mysqli_fetch_array($select);
  if($result[0]){
      
<<<<<<< HEAD
  $sql="DELETE FROM user_profile WHERE user_name='$username'";
  $delete=mysqli_query($connect2->conn,$sql);
  if($delete){
      echo $username.'is DELETED';
=======
  $sql="DELETE FROM user_profile WHERE user_id='$parm'";
  $delete=mysqli_query($connect2->conn,$sql);
  if($delete){
      return true;
>>>>>>> origin/master
  }
  }
  else{
      echo'no user with this name existes ';
  }
  $connect2->closeConnection();
  
  }

  
  
  
<<<<<<< HEAD
  function update($username){
=======
  function update($parm){
      
>>>>>>> origin/master
      $connect2=  new createConnection ();
  $connect2->connectToDatabase();
   
  $sql="SELECT user_id,user_name,user_phone,user_email,first_name,last_name 
<<<<<<< HEAD
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
          
=======
  FROM user_profile WHERE user_id='$parm'";
  $select=  mysqli_query($connect2->conn, $sql);



  if($select){
 
     ?>
      <form action="" method="post">
        <?php  
      while($row=  mysqli_fetch_array($select)){
            
>>>>>>> origin/master
        $user_name=$row['user_name'];
        $user_phone=$row['user_phone'];
        $user_email=$row['user_email'];
        $first_name=$row['first_name'];
        $last_name=$row['last_name'];
<<<<<<< HEAD
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
=======
       

     echo"<table>";
          echo"<tr>";
            echo"<th>"."<lable>"."user name"."</lable>"."</th>";
          echo"<td>"."<input type='text' name='user' value=' $user_name'>"."</td>";
          echo"</tr>";
          echo"<tr>";
          echo"<th>"."<lable>"."user phone"."</lable>"."</th>";
          echo"<td>"."<input type='text' name='user_phone' value=' $user_phone'>"."</td>";
          echo"</tr>";
          echo"<tr>";
           echo"<th>"."<lable>"."user email"."</lable>"."</th>";
          echo"<td>"."<input type='text' name='user_email' value=' $user_email'>"."</td>";
          echo"</tr>";
          echo"<tr>";
           echo"<th>"."<lable>"."first name"."</lable>"."</th>";
          echo"<td>"."<input type='text' name='first_name'value=' $first_name'>"."</td>";
          echo"</tr>";
          echo"<tr>";
           echo"<th>"."<lable>"."last name"."</lable>"."</th>";
          echo"<td>"."<input type='text' name='last_name' value=' $last_name'>"."</td>";
           
          echo"</tr>";          
         
 echo"<td>" ."</td><td><input type='submit'  value='update'>". "</td>";
 echo"</table>";    
 echo"</form>";      
>>>>>>> origin/master
    
     
      }
  }
<<<<<<< HEAD
          
        if (isset($_POST['update'])){
 
echo 'start 0';exit();            $user_name=$_POST['user_name'];
=======
           
        if (isset($_POST['user'])){
            
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user_name=$_POST['user'];
>>>>>>> origin/master
        $user_phone=$_POST['user_phone'];
        $user_email=$_POST['user_email'];
        $first_name=$_POST['first_name'];
        $last_name=$_POST['last_name'];
            
<<<<<<< HEAD
  

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
=======
     $sql="UPDATE user_profile SET user_name='$user_name',user_phone='$user_phone',user_email='$user_email',
      first_name='$first_name',last_name='$last_name' WHERE user_id='$parm'"; 
 
      $update=mysqli_query($connect2->conn,$sql);
      if($update){
          RETURN true;
          
      }
      else{
          echo'not updated';
        }
        }
       }
>>>>>>> origin/master
        
  
  
  }
  function validate(){

<<<<<<< HEAD
$username=$firstname=$lastname=$email=$phone=$gender=$password=$rpassword="";
$eusername=$efirstname=$elastname=$eemail=$ephone=$epassword=$erpassword=$pass=$genderErr="";
 $var =true;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
 if (empty($_POST["username"])) {
     $eusername = "Name is required";
     echo $eusername;
	 $var=false;
=======
$username=$org_name=$firstname=$lastname=$email=$phone=$gender=$password=$rpassword="";
$eusername=$efirstname=$elastname=$eemail=$ephone=$epassword=$erpassword=$pass=$genderErr="";
 $var =true;
 $error=array();
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
 if (empty($_POST["username"])) {
     $error['user_name'] = "Name is required";
    
	
>>>>>>> origin/master
   } else {
     $username = ($_POST["username"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
       $eusername = "Only letters and white space allowed";
     }
   }

<<<<<<< HEAD
    if (empty($_POST["firstname"])) {
     $efirstname = "firstname is required";
=======
    if (empty($_POST["org_name"])) {
     $error['org_name'] = "organization  is required";
    
    }
    else{
        $org_name=$_POST['org_name'];
    }
    
    if (empty($_POST["firstname"])) {
     $error['first_name'] = "firstname is required";
>>>>>>> origin/master
     $var=false;

   } else {
     $firstname= ($_POST["firstname"]);
     // check if e-mail address is well-formed
if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
       $efirstname= "Only letters and white space allowed"; }
     }

    if (empty($_POST["lastname"])) {
<<<<<<< HEAD
     $elastname = "last name is required";
	 $var=false;
=======
    $error['last_name'] = "last name is required";
>>>>>>> origin/master
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
<<<<<<< HEAD
  return $var;
=======
  return $error;
>>>>>>> origin/master
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
 
 

