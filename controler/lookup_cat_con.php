<?php 

//define ('DS',DIRECTORY_SEPARATOR);
 //include "app".DS."DBConnection.class1.php";
 
 class lookup_cat_con{
     
  public function _construct(){
    
  }
          
   function  add(){ 
      include "app".DS."view".DS."lookup_gov_add.php";
   $ename='';
   $name=''; 
   $var=0;
   
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if(empty($_POST['name']))  {
    echo'name require';
$var=1;
 }
   else {
       $name=$_POST['name'] ;
       
       }

       if($var!=1){
            include "app".DS."model".DS."lookup_gov_model.php";
           new lookup_gov_model();
           lookup_gov_model::insert($name);
       }
     
  }
  }
  
 function view(){
      include "app".DS."view".DS."lookup_gov_view.php";
      include "app".DS."model".DS."lookup_gov_model.php";
      new lookup_gov_model();
           lookup_gov_model::select();
 }
  
 function update(){
     
    include "app".DS."view".DS."lookup_gov_update.php";
    
     
if(isset($_POST['submit']))
{
$value=$_POST['sel'];
$name=$_POST['name'];
     include "app".DS."model".DS."lookup_gov_model.php";
     new lookup_gov_model();
     lookup_gov_model::update($value,$name);
}
 }
 
 // here is the delete function 
 function delete(){
     include "app".DS."view".DS."lookup_gov_delete.php";
     
     if(isset($_POST['submit']))
{
$name=$_POST['name'];
include "app".DS."model".DS."lookup_gov_model.php";
     new lookup_gov_model();
           lookup_gov_model::delete($name);
 }
 }
 }
 ?>