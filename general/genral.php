<?php
class Genral{
   
function generateMenu($items,$class) {
  $html = "<div id=$class>";
  $html .= "<nav>";
  foreach($items as $item) {
    $html .= "<li><a href='{$item['url']}'>{$item['text']}</a></li>";
  }
  $html .= "</nav>";
  return $html;
}
}
?>
