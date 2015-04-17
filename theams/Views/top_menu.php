


<?php 
$menu11 = array(

  'home'  => array('text'=>'Home',  'url'=>'?p=home'),
  'registration form' => array('text'=>'registration form', 'url'=>'user_view.php'),
    'About Us' => array('text'=>'About Us', 'url'=>'?p=About Us'),
	'Contact Us' => array('text'=>'Contact Us', 'url'=>'contact_form1.php'),
);

echo generateMenu($menu11);

function generateMenu($items) {
  $html = "<nav>";
  foreach($items as $item) {
  
    $html .= "<li><a href='{$item['url']}'>{$item['text']}</a></li>";
  }
  $html .= "</nav>";
  return $html;
}
 
?>
	
		


