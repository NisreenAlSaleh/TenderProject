<?php

$header_menu = array(

  'home'  => array('text'=>'Home',  'url'=>'./index.php?url=tender_controler/tender_view',),

  'registration form' => array('text'=>'registration form', 'url'=>'./index.php?url=org_controler/create','name'=>'tender_controler'),
    'About Us' => array('text'=>'About Us', 'url'=>'?p=about','value'=>''),
    'Contact Us' => array('text'=>'Contact Us', 'url'=>'./index.php?url=contact_controler/create','name'=>'contact_controler'),
     'log in' => array('text'=>'log in', 'url'=>'./index.php?url=login_controler/log_in','name'=>'login_controler'),
    'log out' => array('text'=>'log out', 'url'=>'./index.php?url=logout_controler/logout','name'=>'logout_controler'),
);
$left_menu = array(

  'users modulus'  => array('text'=>'User Form',  'url'=>'./index.php?url=user_controler/create'),
  'tender modulus'  => array('text'=>'Tender Form',  'url'=>'./index.php?url=tender_controler/create'),
  'organization modulus' => array('text'=>'Organization Form', 'url'=>'./index.php?url=org_controler/create'),
    'User' => array('text'=>'user', 'url'=>'./index.php?url=user_controler/grid_view'),
    'Tender' => array('text'=>'Tender', 'url'=>'./index.php?url=tender_controler/grid_view'),
     'Organization' => array('text'=>'Organization', 'url'=>'./index.php?url=org_controler/grid_view'),
    'governerate' => array('text'=>'governerate', 'url'=>'./index.php?url=lookup_gov_con/grid_view'),
      'category' => array('text'=>'category', 'url'=>'./index.php?url=lookup_cat_con/grid_view'),
    'area' => array('text'=>'area', 'url'=>'./index.php?url=lookup_area_con/grid_view'),
);



$right_menu = array(

  'Agricultural and Veterinary Supplies'  => array('text'=>'Agricultural and Veterinary Supplies', 
  'url'=>'?p= Agricultural and Veterinary Supplies'),
  'Foodstuffs'  => array('text'=>'Foodstuffs',  'url'=>'?p=Foodstuffs'),
  'Commercial Supplies' => array('text'=>'Commercial Supplies', 'url'=>'?p=Commercial Supplies'),
   'Consulting and training'  => array('text'=>'Consulting and training',  'url'=>'?p=Consulting and training'),
  'Services'  => array('text'=>'Services',  'url'=>'?p=Services'),
'Construction and Building Materials'  => array('text'=>'Construction and Building Materials', 
	   'url'=>'?p=Construction and Building Materials'),
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


?>
