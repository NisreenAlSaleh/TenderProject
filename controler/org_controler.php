
<?php

class org_controler {
    
    function __construct() {
     
     include 'modle/organization.php';
     
    }
    function create(){
      
        if(isset($_POST['organizatoin_name'])){
        
        new organization();
        if(organization::validate()){
     
        organization::check_db();
        }
          
             
           
        }
           include'view/org_form.php';
    
    }
    function search(){
        include 'organization.php';
    }
       function delete(){
            if(isset($_POST['org_name'])){
         $org_name=$_POST['org_name'];
          echo$org_name;
         new organization();
         if(organization::validate_d_u()){
             organization::delete($org_name);
  }
       
  
  }
 
  include'D:\wamp\www\tender_project\view\org_delete_form.php';
  
       } 
       function update(){
                   if(isset($_POST['orgname'])){
         $orgname=$_POST['orgname'];
          echo$orgname;
         new organization();
         if(organization::validate_d_u()){
             organization::delete($orgname);
  }
       
  
  }
            include'D:\wamp\www\tender_project\view\org_update_form.php';
       }
   function main(){
        include'D:\wamp\www\tender_project\general\indexFinal.php';
   }
    }

 


?>



