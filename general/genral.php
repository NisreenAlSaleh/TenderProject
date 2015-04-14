<?php
class Genral{
   
function generateMenu($items) {
  
  $html = "<nav>";
  foreach($items as $item) {
    $html .= "<li><a href='{$item['url']}'>{$item['text']}</a></li>";
  }
  $html .= "</nav>";
  return $html;
}
}
?>
