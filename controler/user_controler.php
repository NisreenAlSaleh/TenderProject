

<?php

class user_controler {
    
function __construct(){
         include'\modle\user.php';
         include'\view\user_grid_view.php';
    
        }
function create(){
          if(isset($_POST['username'])){
        
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
       
        }
function delete($parm)
        {
    
    $user=new user();
   if( $user->delete($parm)){
       echo $parm."</span>"."is DELETED";
   }
   user_controler::grid_view();
      
        }
function update($parm){
        
         $user= new user();
         if( $user->update($parm)){
             echo $parm."</span>"."is updated";
             
         }
          user_controler::grid_view();
      

          
        }
     
function grid_view(){
  $user_grid_view=  new user_grid_view();
    $user_grid_view->generate_grid();
}      

function view($parm){
   $user=new user();
   $user->view($parm);
}
 
        }




?>
    



