<?php
echo 'jjg';
class login_controler {

    function __construct() {
        include'D:\wamp\www\tender_project\modle\login.php';
    }
    function log_in(){
        if(isset($_POST['user_name'])){
            new login();
          if(login::validate()){
            $user_name=$_POST['user_name'];
            $password=$_POST['password'];
              login::check_db($user_name,$password);
              new session();
              session::start($user_name,$password);
              
                   
          }
        }
      
          include'D:\wamp\www\tender_project\view\login_form.php';
            
        
    }

}
