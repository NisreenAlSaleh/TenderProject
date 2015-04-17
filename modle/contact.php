<?php

<<<<<<< HEAD
<<<<<<< HEAD
 include 'D:\wamp\www\tender_project\modle\DBconnection.php';
=======
 include'modle/DBconnection.php';
>>>>>>> origin/master
=======
 include 'DBconnection.php';
>>>>>>> origin/master
 
 class contact{
      public function __construct() {
          
        
     }
   public  function insert(){
       
            $connect=  new createConnection ();
  $connect->connectToDatabase();
  $insert=mysqli_query($connect->conn,"INSERT INTO contact(name,phone,email,subject_content)VALUES ('".$_POST['username']."','".$_POST['phone']."','".$_POST['email']."','".$_POST['content']."')");
  echo$insert;
  if($insert){
      echo'Thank you for your time';
  }
  $connect->closeConnection();
     }
     
     
function validate(){
     $username=$phone=$email=$content='';
       $eusername=$ephone=$eemail=$econtent='';
       $var=true;
       if ($_SERVER["REQUEST_METHOD"] == "POST") {
           if(empty($_POST['username'])){
              echo"please enter ur user name";
               $var=false;
           }
           else{
               $username=$_POST['username'];
           }
           if(empty($_POST['phone'])){
               $ephone="please enter ur user phone";
               $var=false;
           }
           else{
               $phone=$_POST['phone'];
           }
           if(empty($_POST['email'])){
               $eemail="please enter ur email";
               $var=false;
           }
           else{
               $email=$_POST['email'];
           }
           if(empty($_POST['content'])){
               $econtent="please enter the subject you want to discuse with us";
               $var=false;
           }
           else{
               $content=$_POST['content'];
           }
           if($var==true){
             return $var;
           }
           
           
       }
}
     }

?>
