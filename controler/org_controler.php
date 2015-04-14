
<?php

class org_controler {
    
    function __construct() {
     include'/modle/organization.php';
     include'/view/org_grid_view.php';
     
    }
    function create(){
      
        if(isset($_POST['organizatoin_name'])){
        
        new organization();
        if(organization::validate()){
     
        organization::check_db();
         new org_grid_view();
    org_grid_view::generate_grid();
        }
          
             
           
        }
           include'/view/org_form.php';
    
    }
    function search(){
        include 'organization.php';
  
  }

  
  function delete($parm)
        {
    
    new organization();
   if( organization::delete($parm)){
       echo $parm."</br>"."is DELETED";
   }
   org_controler::grid_view();
      
        }
function update($parm){
        
          new organization();
         if( organization::update($parm)){
             echo $parm."</br>"."is updated";
             org_controler::grid_view();
         }
          
      

          
        }
     
function grid_view(){
    new org_grid_view();
    org_grid_view::generate_grid();
}      

function view($parm){
   new organization();
  organization::view($parm);
}
    }

 


?>



