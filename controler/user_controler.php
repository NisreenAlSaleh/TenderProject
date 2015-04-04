

<?php

    
class user_controler {
    function __construct(){
         include'D:\wamp\www\tender_project\modle\user.php';
    
    }
    function create(){
             if(isset($_POST['username'])){
        
        new user();
        if(user::validate()){
     
       user::check_db();
        }
          
             
           
        }
          
       include  'D:\wamp\www\tender_project\view\user_form.php';
       
    }
    function search(){
 include  'D:\wamp\www\tender_project\view\user_delete_form.php';
       
    }
  function delete()
  {
         if(isset($_POST['username'])){
         $username=$_POST['username'];
          echo$username;
         new user();
         if(user::validate_d_u()){
         user::delete($username);
  }
       
  
  }
        include'D:\wamp\www\tender_project\view\user_delete_form.php';
  }
       function update(){
         if(isset($_POST['username'])){
          $username=$_POST['username'];
 
        echo$username;
        
          new user();
          if(user::validate_d_u()){
           
          user::update($username);
        }
       
  
       }
         include'D:\wamp\www\tender_project\view\user_update_form.php';

          
       }
 
 
    }




?>
    



