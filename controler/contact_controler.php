<?php
class contact_controler {

    function __construct() {
         include'D:\wamp\www\tender_project\modle\contact.php';
    }
    function create(){
           if(isset($_POST['username'])){
        
        new contact();
        if(contact::validate()){
     
       contact::insert();
        }
          
             
           
        }
           include'D:\wamp\www\tender_project\view\contact_form.php';
     
    }

}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
