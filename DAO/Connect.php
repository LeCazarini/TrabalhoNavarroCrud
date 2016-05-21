<?php 
class DAO_Connect{
    
    private $_link;
    private $_host;
    private $_user;
    private $_pw;
    private $_db;
    
    public function __construct(){
    
        $this->_host = "localhost";
        $this->_user = "cazarini";
        $this->_pw   = "";
        $this->_db   = 'bancotrabalho';
    }
    
    public function connect(){
        try{
            if(empty($this->_link)){
                $this->_link = mysqli_connect($this->_host, $this->_user, $this->_pw);
                if(!$this->_link){
                    throw new Exception("Não foi possível estabelecer conexão : ".mysqli_error($this->_link));
                }
                if(!mysqli_select_db($this->_link, $this->_db)){
                    throw new Exception("Não foi possível conectar ao banco {$this->_db} : ".mysqli_error($this->_link));
                }
            }
        }catch(Exception $error){
            die($error->getMessage());
        }
    }
    
    public function disconnect(){
        if(!empty($this->_link)){
            mysqli_close($this->_link);
            $this->_link = null;
        }
    }
    
    public function getLink(){
        return $this->_link;
    }
    
    public function setHost($value){
        $this->_host = $value;
    }
    
    public function getHost(){
        return $this->_host;
    }
     
    public function setUser($value){
        $this->_user = setUser;
    }
    
    public function getUser(){
        return $this->_user;
    }
     
    public function setPassword($value){
        $this->_pw = $value;
    }
    
    public function getPassword(){
        return $this->_pw;
    }
}
?>


