<?php
class contact_controler {

    function __construct() {
<<<<<<< HEAD
         include'D:\wamp\www\tender_project\modle\contact.php';
=======
         include'\modle\contact.php';
>>>>>>> origin/master
    }
    function create(){
           if(isset($_POST['username'])){
        
        new contact();
        if(contact::validate()){
     
       contact::insert();
        }
          
             
           
        }
<<<<<<< HEAD
           include'D:\wamp\www\tender_project\view\contact_form.php';
=======
           include'\view\contact_form.php';
>>>>>>> origin/master
     
    }

}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
