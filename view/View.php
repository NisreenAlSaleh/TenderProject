<?php

class Views {

	function __construct() {
		//echo 'this is the view';
	}

	public function render($name, $noInclude = false)
	{
		if ($noInclude == true) {
<<<<<<< HEAD
			require 'D:/wamp/www/tender_project/view/' . $name . '.php';	
		}
		else {
			
			require 'D:/wamp/www/tender_project/view/' . $name . '.php';
=======
			require 'view/' . $name . '.php';	
		}
		else {
			
			require 'view/' . $name . '.php';
>>>>>>> origin/master
				
		}
	}

}