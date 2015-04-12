<?php
 
class login{
 public   function __construct(){
<<<<<<< HEAD
        include 'D:\wamp\www\tender_project\modle\DBconnection.php';
=======
      
        include'modle/DBconnection.php';
>>>>>>> origin/master
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
<<<<<<< HEAD
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

if (empty($_POST['username']) || empty($_POST['password'])) 
{

echo "Username or Password is invalid";
$var=false;
=======
      if ($_SERVER["REQUEST_METHOD"] == "POST") {

      if (empty($_POST['user_name'])) 
         {

      echo "Username or Password is empty";
      $var=false;
>>>>>>> origin/master

}

else{

<<<<<<< HEAD
$user_name=$_POST['username'];

$password=$_POST['password'];
 
}
        }
        return $var;
    }
    
    
function ceck_db($user_name,$password){
=======
$user_name=$_POST['user_name'];

$password=$_POST['password'];
 
}return $var;
        }
        
    }
    
    
function check_db($user_name,$password){
>>>>>>> origin/master
   $connect=  new createConnection ();
  $connect->connectToDatabase();

   $sql= "SELECT user_name,user_password from user_profile WHERE user_password='$password' AND user_name='$user_name'";

$result = $connect->conn->query($sql);


if ($result->num_rows ==1) {



<<<<<<< HEAD
include'D:\wamp\www\tender_project\modle\session.php';
$var = new session();

$var->start($_POST['username'],$_POST['password']);
 
// Initializing Session
echo$user_name;
header(URL);
=======
 
// Initializing Session

header("location: index.php");
>>>>>>> origin/master
 // Redirecting To Other Page

} 
else {

echo"Username or Password is invalid";

}

$connect->closeConnection(); // Closing Connection



}
    
    
}
?>
