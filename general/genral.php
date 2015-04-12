<?php
class Genral{
   
<<<<<<< HEAD
function generateMenu($items,$class) {
  $html = "<div id=$class>";
  $html .= "<nav>";
=======
function generateMenu($items) {
  
  $html = "<nav>";
>>>>>>> origin/master
  foreach($items as $item) {
    $html .= "<li><a href='{$item['url']}'>{$item['text']}</a></li>";
  }
  $html .= "</nav>";
  return $html;
}
}
?>
