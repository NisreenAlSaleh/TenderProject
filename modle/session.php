<?php

  class session 
{




     
function __construct(){

     }
   
 public function start($username,$password){
 
 $_SESSION['username']=$username;
         
 $_SESSION['password']=$password;
         
echo $_SESSION['username'];


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
