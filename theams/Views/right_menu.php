<<<<<<< HEAD
<<<<<<< HEAD
	<div id=ten >
	<div id="outter">
	   <div id="navbar>


        <ul>
        <li id="scrol"/>
        <ul>
        <li> <a href="index (4).html">
        <h1>Areas bidding</h1>
        <ul>
        <li><a href="?p=Agricultural and Veterinary Supplies"><?php echo $menu2['Agricultural and Veterinary Supplies']['text']; ?></a></li>
	<li><a href="?p=Foodstuffs "><?php echo $menu2['Foodstuffs']['text']; ?></a></li>
        <li><a href="?p=Commercial Supplies "><?php echo $menu2['Commercial Supplies']['text']; ?></a></li>
	<li><a href="?p=Consulting and training "><?php echo $menu2['Consulting and training']['text']; ?></a></li>
	<li><a href="?p= Services"><?php echo $menu2['Services']['text']; ?></a></li>
	<li><a href="?p=Construction and Building Materials "><?php echo $menu2['Construction and Building Materials']['text']; ?></a></li>
	<li><a href="?p=Supplies medical and scientific "><?php echo $menu2['Supplies medical and scientific']['text']; ?></a></li>
	<li><a href="?p= Information technology"><?php echo $menu2['Information technology']['text']; ?></a></li>
	<li><a href="?p=Media, advertising and printing "><?php echo $menu2['Media, advertising and printing']['text']; ?></a></li>
	<li><a href="?p=Real estate and rental "><?php echo $menu2['Real estate and rental']['text']; ?></a></li>
	<li><a href="?p= Insurance Services"><?php echo $menu2['Insurance Services']['text']; ?></a></li>
	<li><a href="?p=Administrative and Financial Services "><?php echo $menu2['Administrative and Financial Services']['text']; ?></a></li>
	<li><a href="?p= Elevators and escalators"><?php echo $menu2['Elevators and escalators']['text']; ?></a></li>
	<li><a href="?p= Machinery and equipment"><?php echo $menu2['Machinery and equipment']['text']; ?></a></li>
	<li><a href="?p= Vehicles, cars and spare parts"><?php echo $menu2['Vehicles, cars and spare parts']['text']; ?></a></li>		
	</ul>
        </a></li>
             
        </ul>
        </li>
        </ul>
	</div>
	
        </div>
        </div>
=======
=======
>>>>>>> origin/master

	
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

<<<<<<< HEAD
      
>>>>>>> origin/master
=======
      
>>>>>>> origin/master
