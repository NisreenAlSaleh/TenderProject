
	
<?php 
$menu3 = array(

  'Agricultural and Veterinary Supplies'  => array('text'=>'Agricultural and Veterinary Supplies', 
  'url'=>'?p= Agricultural and Veterinary Supplies'),
  'Foodstuffs'  => array('text'=>'Foodstuffs',  'url'=>'?p=Foodstuffs'),
  'Commercial Supplies' => array('text'=>'Commercial Supplies', 'url'=>'?p=Commercial Supplies'),
   'Consulting and training'  => array('text'=>'Consulting and training',  'url'=>'?p=Consulting and training'),
  'Services'  => array('text'=>'Services',  'url'=>'?p=Services'),
  'Construction and Building Materials'  => array('text'=>'Construction and Building Materials','url'=>'?p=Construction and Building Materials'),
  'Supplies medical and scientific'  => array('text'=>'Supplies medical and scientific', 'url'=>'?p=Supplies medical and scientific'),		   
  'Information technology'  => array('text'=>'Information technology','url'=>'?p=Information technology'),
  'Media, advertising and printing'  => array('text'=>'Media, advertising and printing',  'url'=>'?p=Media, advertising and printing'),
  'Real estate and rental'  => array('text'=>'Real estate and rental',  'url'=>'?p=Real estate and rental'),
  'Insurance Services'  => array('text'=>'Insurance Services',  'url'=>'?p=Insurance Services'),
  'Administrative and Financial Services'  => array('text'=>'Administrative and Financial Services', 
  'url'=>'?p=Administrative and Financial Services'),
  'Elevators and escalators'  => array('text'=>'Elevators and escalators',  'url'=>'?p=Elevators and escalators'),
  'Machinery and equipment'  => array('text'=>'Machinery and equipment',  'url'=>'?p=Machinery and equipment'),
  'Vehicles, cars and spare parts'  => array('text'=>'Vehicles, cars and spare parts',  'url'=>'?p=Vehicles, cars and spare parts'),

);


echo generateMenu3($menu3);

function generateMenu3($items) {
  $html = "<nav>";
  foreach($items as $item) {
  $html .= "<li><a href='{$item['url']}'>{$item['text']}</a></li>";
  }
  $html .= "</nav>";
  return $html;
}
?>

      