

<?php


class tender_controler {
    function __construct(){
    include'/modle/tender.php';
   include'/view/tender/tender_grid_view.php';
    

    }
    function create(){
        if(isset($_POST['org_name'])){
           $error=array();
          new tender();
         $error= tender::validate();
         $var=true;
     foreach($error as $e)
if(!empty($e))  
$var=false;
          if($var){
           if(  tender::check_db()){
            new tender_grid_view();
          tender_grid_view::generate_grid();
    
    }
     
          }
        }
          
       
       include'/view/tender/tender_form.php';
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
  
function tender_view(){
  
    echo'<table >';
    echo'<tbody>';
    echo'<tr>';
    echo' <td>';
    include'/controler/lookup_gov_con.php';
    
   new lookup_gov_con();
    lookup_gov_con::view();
  
  
    echo' <td>';
    include'/controler/lookup_cat_con.php';
    
    $lookup_cat_con=new lookup_cat_con();
    $lookup_cat_con->view();
  //  echo' </td>';
    
    $statusPost2 = $_POST['sel2'];
    $statusPost = $_POST['sel1']; 

  echo' <td>';
  echo' <input type="submit" name="formSubmit" value="Submit" >';
  echo' </td>';
  
  echo'</tr>';    echo'</tbody>';   echo'</table>';
  new tender();
  tender::view_tender($statusPost,$statusPost2);    
}}
?>
    



