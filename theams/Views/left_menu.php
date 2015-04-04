
<div id=list >
<div class="headmenu"> <h2> Form</h2></div>
	<div class="bodymenulink">
 <center>
<?php
$menu1 = array(

  'users modulus'  => array('text'=>'users modulus',  'url'=>'tender_project\general\user_controler1.php'),

  'tender modulus'  => array('text'=>'tender modulus',  'url'=>'?p=login'),
  
  'organization modulus' => array('text'=>'organization modulus', 'url'=>'user_controler1.php'),
);

echo generateMenu($menu1);

function generateMenu($items) {
  $html = "<nav>";
  foreach($items as $item) {
  $html .= "<li><a href='{$item['url']}'>{$item['text']}</a></li>";
  }
  $html .= "</nav>";
  return $html;
}
?>
	</center>

	</div>	
	</div>