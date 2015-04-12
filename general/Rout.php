<?php

class Routing{
public $routes=array();
function router()
{

		
		

		
		
		if(isset($_GET['url'])){
                    $url = explode('/', $_GET['url']);
                    
		$file = 'controler/' . $url[0] . '.php';
		if (file_exists($file)) {
			require $file;
		} else {
			echo'controler not found0000';
		}
		
		
<<<<<<< HEAD

		// calling methods
		
=======
                    
		// calling methods
		if (isset($url[2])) {
			if (method_exists($url[0], $url[1])) {
                            $controller=new $url[0];
				$controller->{$url[1]}($url[2]);
			}
                        else {
				echo 'function with no parameters';
			}
                } else{
>>>>>>> origin/master
			if (isset($url[1])) {
				if (method_exists($url[0], $url[1])) {
                                    $controller=new $url[0];
					$controller->{$url[1]}();
				} else {
					echo'method not found';
				}
<<<<<<< HEAD
			} 
=======
			} }
>>>>>>> origin/master
		}
}

}

?>