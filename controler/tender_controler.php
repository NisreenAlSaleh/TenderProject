

<?php


class tender_controler {
    function __construct(){
    include'/modle/tender.php';
   include'/view/tender_grid_view.php';
    
    }
    function create(){
       if(isset($_POST['tender_name'])){
          
        $tender=new tender();
        if($tender->validate()){
     
        $tender->check_db();
        }
       }
       include'/view/tender_form.php';
    }
    function search(){
        include'search_form1.php';
       
    }
 function delete($parm)
        {
    
   $tender= new tender();
   if( $tender->delete($parm)){
       echo $parm."</span>"."is DELETED";
   }
   tender_controler::grid_view();
      
        }
function update($parm){
        
         $tender= new tender();
         if( $tender->update($parm)){
             echo $parm."</span>"."is updated";
             tender_controler::grid_view();
         }
          
      

          
        }
     
function grid_view(){
  $tender_grid_view=  new tender_grid_view();
    $tender_grid_view->generate_grid();
}      

function view($parm){
  $tender= new tender();
   $tender->view($parm);
}
   
    }




?>
    



