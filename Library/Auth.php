<?php 
class Auth{
    
    private $_namespace;
    
    public function __construct($namespace){
        
        $this->_namespace = $namespace;
        
        if(!isset($_SESSION)){
            session_start();
        }
    }
    
    public function isAuthenticated(){
        if(!empty($_SESSION[$this->_namespace])){
            return true;
        }
        
        return false;
    }
    
    public function setData($data){
        $_SESSION[$this->_namespace] = $data;
    }
    
     public function destroy(){
         unset($_SESSION[$this->_namespace]);
     }
}
?>