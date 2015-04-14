<?php
/*

if ($_SERVER["REQUEST_METHOD"] == "POST") {

if (empty($_POST['username']) || empty($_POST['password'])) 
{

$error = "Username or Password is invalid";
echo "ksdf";

}

else{

$username=$_POST['username'];

$password=$_POST['password'];
 
 include'D:\wamp\www\tender_project\modle\DBconnection.php';

         $connect=  new createConnection ();
  $connect->connectToDatabase();

   $sql= "SELECT user_name,user_password from user_profile WHERE user_password='$password' AND user_name='$username'";

$result = $connect->conn->query($sql);


if ($result->num_rows ==1) {



include'D:\wamp\www\tender_project\modle\session.php';
$var = new session();

$var->start($_POST['username'],$_POST['password']);
 
// Initializing Session
echo'hallo user ';
header("location: D:\wamp\www\tender_project\general\indexFinal.php");
 // Redirecting To Other Page

} 
else {

$error = "Username or Password is invalid";

}

$connect->closeConnection(); // Closing Connection


}


}
*/
?>
