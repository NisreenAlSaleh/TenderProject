<?php
class login_controler {

    function __construct() {
        include'D:\wamp\www\tender_project\modle\login.php';
    }
    function log_in(){
        if(isset($_POST['user_name'])&&isset($_POST['password'])){
            $user_name=$_POST['user_name'];
            $password=$_POST['password'];
            new login();
          if(login::validate()){
              login::check_db($user_name,$password);
                   
          }
          include'D:\wamp\www\tender_project\view\login_form.php';
            
            
        }
    }

}
