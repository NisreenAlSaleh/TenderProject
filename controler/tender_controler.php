

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
   
    }




?>
    



