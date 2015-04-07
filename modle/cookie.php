<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cookise
 *
 * @author BATTAH
 */


class Cookie {

    public $cookieName = null;        # @var string
    public $cookieValue = null;       # @var string
    public $cookiExpire = null;       # @var int (Timestamp)
    public $cookiePath = null;        # @var string (Default path)
    public $cookieDomain = null;      # @var string (Default domain)
    public $cookieSecure = false;     # @var bool (HTTPS)
    public $cookieHttpOnly = null;    # @var bool

    private $cookieErrorReport = "Faild to the Cookie";

    #Constructor
    public function __construct( $name, $value, $day, $path, $httpOnly ) {
        $this->cookieDomain = "." . $_SERVER['HTTP_HOST'];
        $this->cookieName = $name;
        $this->cookieValue = $value;
        $this->cookiePath = $path;
        $this->cookieHttpOnly = $httpOnly || true;
        $this->isSecure();
        $this->setExpirationDate( $day );
     $this->setcookie( $this->cookieName, $this->cookieValue, $this->cookieExpire, $this->cookiePath, $this->cookieDomain, $this->cookieSecure, $this->cookieHttpOnly );
    }

    # If HTTPS?
    private function isSecure() {

                  if( !empty( $_SERVER['HTTPS'] ) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443 ) {
            $this->cookieSecure = true;
        }
    }

    # Set the expirations Date for the cookie
    private function setExpirationDate( $day ) {
        $this->cookieExpire = time() + ($day * 24 * 60 * 60);
    }

    # Set the cookie
    public function set() {
            if(!setcookie( $this->cookieName, $this->cookieValue, $this->cookieExpire, $this->cookiePath, $this->cookieDomain, $this->cookieSecure, $this->cookieHttpOnly )){
              throw new Exception($this->cookieErrorReport);
            }
    }

    # Is the cookie set
    public function get($name){
    if(((isset($_COOKIE[$name]))? true : false))  {
        return $_COOKIE[$name];
    }
    else  return  $this->$cookieErrorReport ;
}
 public  function  destroycookies(){
     //set the expiration data to one hour ago
     $this-> setExpirationDate( time()-3600 );
 }



}


?>