

<?php
$menu2 = array(

  'users '  => array('text'=>'users ',  'url'=>'tender_project\general\user_controler1.php'),

  'tender '  => array('text'=>'tender ',  'url'=>'?p=login'),
  
  'organization ' => array('text'=>'organization ', 'url'=>'user_controler1.php'),
);

echo generateMenu2($menu2);

function generateMenu2($items) {
  $html = "<nav>";
  foreach($items as $item) {
  $html .= "<li><a href='{$item['url']}'>{$item['text']}</a></li>";
  }
  $html .= "</nav>";
  return $html;
}
?>
	