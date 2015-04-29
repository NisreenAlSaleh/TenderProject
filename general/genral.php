<?php
include_once 'autharization.php';
class Genral{
   
function generateMenu($items) {
 //   echo'this the genarate method';
    
    //print_r($items);
    
 
  $html = "<nav>";
  foreach($items as $item) {
        $modules=array();
        if(isset($_SESSION['user_id'])){
  $s=new autharization();
  $modules=$s->auth_drow($_SESSION['user_id'], $items['']);
  //print_r($modules);
    $html .= "<li><a href='{$item['url']}'>{$item['text']}{$item['value']}</a></li>";
  }
  
  

  
    
    else{
         $html = "<nav>";
  foreach($items as $item) {
    $html .= "<li><a href='{$item['url']}'>{$item['text']}</a></li>";
  }
     

    }
       $html .= "</nav>";
  return $html;
}

}
}
?>
