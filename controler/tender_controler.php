

<?php


class tender_controler {
    function __construct(){
    include'D:\wamp\www\tender_project\modle\tender.php';
   
    }
    function create(){
       if(isset($_POST['tender_name'])){
        
        new tender();
        if(tender::validate()){
     
        tender::check_db();
        }
       }
       include'D:\wamp\www\tender_project\view\tender_form.php';
    }
    function search(){
        include'search_form1.php';
       
    }
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
   
    }




?>
    



