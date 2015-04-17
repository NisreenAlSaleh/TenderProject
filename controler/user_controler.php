

<?php

<<<<<<< HEAD
<<<<<<< HEAD
    
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
=======
class user_controler {
    
function __construct(){
         include'/modle/user.php';
         include'/view/user_grid_view.php';
        
=======
class user_controler {
    
function __construct(){
         include'\modle\user.php';
         include'\view\user_grid_view.php';
>>>>>>> origin/master
    
        }
function create(){
          if(isset($_POST['username'])){
        
<<<<<<< HEAD
          new user();
         $error= user::validate();
         //print_r($error);
          if(empty($error)){
             user::check_db();   
          }
        }
          include  'view/user_form.php';
       
        }
 function search(){
          include  'view/user_delete_form.php';
=======
         $user= new user();
         $user->validate();
         
          if(empty($error)){
              $user->check_db(); 
            $user_grid_view= new user_grid_view();
            $user_grid_view->generate_grid();
          }
          
        }
          include  '\view\user_form.php';
       
        }
 function search(){
          include  '\view\user_delete_form.php';
>>>>>>> origin/master
       
        }
function delete($parm)
        {
<<<<<<< HEAD
    echo $parm;
    new user();
   if( user::delete($parm)){
=======
    
    $user=new user();
   if( $user->delete($parm)){
>>>>>>> origin/master
       echo $parm."</span>"."is DELETED";
   }
   user_controler::grid_view();
      
        }
function update($parm){
        
<<<<<<< HEAD
          new user();
         if( user::update($parm)){
             echo $parm."</span>"."is updated";
             user_controler::grid_view();
         }
          
=======
         $user= new user();
         if( $user->update($parm)){
             echo $parm."</span>"."is updated";
             
         }
          user_controler::grid_view();
>>>>>>> origin/master
      

          
        }
     
function grid_view(){
<<<<<<< HEAD
    new user_grid_view();
    user_grid_view::generate_grid();
}      

function view($parm){
   new user();
   user::view($parm);
}
 
        }
>>>>>>> origin/master
=======
  $user_grid_view=  new user_grid_view();
    $user_grid_view->generate_grid();
}      

function view($parm){
   $user=new user();
   $user->view($parm);
}
 
        }
>>>>>>> origin/master




?>
    



