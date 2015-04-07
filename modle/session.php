<?php

  class session 
{




     
function __construct(){

     }
   
 public function start($username){
 $q="SELECT user_id FROM user_profile WHERE username='$username'";
 $select=  mysqli_query($connect->conn, $q);
 if($select){
 $res=  mysqli_fetch_array($select);
$_SESSION['user_id']=$res[0];
 }
$_SESSION['last_action']=time();

  
  }
     
public function destory(){


if(isset($_SESSION['username'])
and isset($_SESSION['password']))


	unset($_SESSION['username'],$_SESSION['password']);
      
  //remove all session variables
        
session::session_unset();


// destroy the session

session_destroy();
       
 headrer('location:home.php');





       
 }

         
public function checksession(){



   return  (isset($_SESSION['username'])  and  isset($_SESSION['password']))?true:false;



 
        }




  
  }
?>
