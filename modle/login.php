<?php
 
class login{
 public   function __construct(){
        include 'D:\wamp\www\tender_project\modle\DBconnection.php';
    }
    /*
    function valide(){
             $connect=  new createConnection ();
  $connect->connectToDatabase();
  $username=$_POST['username'];
  $password=$_POST['password'];
  $s="SELECT user_name,user_password FROM user_profile WHERE user_name='$username' AND user_password='$password'";
 //  $s2="SELECT org_name,password FROM org_table WHERE org_name='$username' AND password='$password'";
  $query=  mysqli_query($connect->conn,$s);
 // $query=  mysqli_query($connect->conn,$s2);
  $user="SELECT user_name FROM user_profile WHERE user_name='$username'";
  $pass="SELECT user_password FROM user_profile WHERE user_password='$password'AND username='$user'";
  
  if($pass==$password){
     echo 'haoooo user';
  }
  else{
      echo'you need to regester first';
  }
  }
    
    */
    
    
    function validate(){
        $var=true;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

if (empty($_POST['username']) || empty($_POST['password'])) 
{

echo "Username or Password is invalid";
$var=false;

}

else{

$user_name=$_POST['username'];

$password=$_POST['password'];
 
}
        }
        return $var;
    }
    
    
function ceck_db($user_name,$password){
   $connect=  new createConnection ();
  $connect->connectToDatabase();

   $sql= "SELECT user_name,user_password from user_profile WHERE user_password='$password' AND user_name='$user_name'";

$result = $connect->conn->query($sql);


if ($result->num_rows ==1) {



include'D:\wamp\www\tender_project\modle\session.php';
$var = new session();

$var->start($_POST['username'],$_POST['password']);
 
// Initializing Session
echo$user_name;
header(URL);
 // Redirecting To Other Page

} 
else {

echo"Username or Password is invalid";

}

$connect->closeConnection(); // Closing Connection



}
    
    
}
?>
