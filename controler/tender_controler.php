

<?php


class tender_controler {
    function __construct(){
<<<<<<< HEAD
<<<<<<< HEAD
    include'D:\wamp\www\tender_project\modle\tender.php';
=======
    
    include'modle/tender.php';
>>>>>>> origin/master
   
=======
    include'/modle/tender.php';
   include'/view/tender_grid_view.php';
    
>>>>>>> origin/master
    }
    function create(){
       if(isset($_POST['tender_name'])){
        
        new tender();
        if(tender::validate()){
     
        tender::check_db();
        }
       }
<<<<<<< HEAD
<<<<<<< HEAD
       include'D:\wamp\www\tender_project\view\tender_form.php';
=======
       include'view/tender_form.php';
>>>>>>> origin/master
=======
       include'/view/tender_form.php';
>>>>>>> origin/master
    }
    function search(){
        include'search_form1.php';
       
    }
<<<<<<< HEAD
<<<<<<< HEAD
   function delete(){
        if(isset($_POST['tender_name'])){
         $tender_name=$_POST['tender_name'];
          echo$tender_name;
         new tender();
         if(tender::validate_d_u()){
         tender::delete($tender_name);
  }
       
  
  }
 
  include'D:\wamp\www\tender_project\view\tender_delete_form.php';
  
       } 
  
   function update(){
     if(isset($_POST['tender_name'])){
          $tender_name=$_POST['tender_name'];
 
        echo$tender_name;
        
          new tender();
          if(tender::validate_d_u()){
           
          tender::update($tender_name);
        }
       
  
       }
         include'D:\wamp\www\tender_project\view\tender_update_form.php'; 
   }
=======
=======
>>>>>>> origin/master
 function delete($parm)
        {
    echo $parm;
    new tender();
   if( tender::delete($parm)){
       echo $parm."</span>"."is DELETED";
   }
   tender_controler::grid_view();
      
        }
function update($parm){
        
          new tender();
         if( tender::update($parm)){
             echo $parm."</span>"."is updated";
             tender_controler::grid_view();
         }
          
      

          
        }
     
function grid_view(){
    new tender_grid_view();
    tender_grid_view::generate_grid();
}      

function view($parm){
   new tender();
   tender::view($parm);
}
<<<<<<< HEAD
>>>>>>> origin/master
=======
>>>>>>> origin/master
   
    }




?>
    



