<?php
class contact_controler {

    function __construct() {
         include'modle/contact.php';
    }
    function create(){
           if(isset($_POST['username'])){
        
        new contact();
        if(contact::validate()){
     
       contact::insert();
        }
          
             
           
        }
           include'view/contact_form.php';
     
    }

}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
