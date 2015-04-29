<?php

include_once 'autharization.php';


class Routing {

    public $routes = array();

    function __construct() {
        
    }

    function router() {
       
      

       // var_dump($_SESSION);

        if (isset($_GET['url'])) {
            $url = explode('/', $_GET['url']);
            

            $file = 'controler/' . $url[0] . '.php';
            if (file_exists($file)) {
                require $file;
            } else {
                echo'controler not found';
            }



            // calling methods
            if (isset($url[2])) {
                if (method_exists($url[0], $url[1])) {


                    $controller = new $url[0];
                    $controller->{$url[1]}($url[2]);
                } else {
                    echo 'function with no parameters';
                }
            } else {
                if (isset($url[1])) {
                    if (method_exists($url[0], $url[1])) {

                        $ex = array(
                                    'login_controler'=>'login_controler',
                                    'lookup_cat_con'=>'lookup_cat_con',
                                   );
                        $ex2 = array(
                                    'logout_controler'=>'logout_controler',
                         
                                   );

                        if (!isset($_SESSION['user_id']) || ( in_array($url[0],$ex))) {

                            echo 'no session';
                            $controller = new $url[0];
                            $controller->{$url[1]}();
                        }
                        else{ 
                            
                        if(isset($_SESSION['user_id']) &&( in_array($url[0],$ex2)) ){
                           
                             echo 'session with extiption 2';
                             echo $url[0];
                                 $controller = new $url[0];
                                $controller->{$url[1]}();
                        }
                        else{
                            echo'session with no exiption'."</br>";
                             $s = new autharization();
                            if($s->auth($url[0], $url[1], $_SESSION['user_id'])) {
                                $controller = new $url[0];
                                $controller->{$url[1]}();
                            
                            }
                            else {
                                echo 'not authrize';
                            }
                        }
                        }
                    } else {
                        echo'method not found';
                    }
                }
            }
        }
    }

}

?>