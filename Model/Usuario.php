<?php 
class Model_Usuario{
   
   private $_id;
   private $_name;
   private $_email;
   private $_password;
   private $_access;
   private $_date;
   
   public function __construct(){}
   
   public function setId($value){
       $this->_id = $value;
   }
      
   public function getId(){
       return $this->_id;
   }
      
   public function setName($value){
       $this->_name = $value;
   }
      
   public function getName(){
       return $this->_name;
   }

  public function setEmail($value){
       $this->_email = $value;
   }
      
   public function getEmail(){
       return $this->_email;
   }
   
  public function setPassword($value){
       $this->_password = $value;
   }
      
   public function getPassword(){
       return $this->_password;
   }
   
      
  public function setAccess($value){
       $this->_access = $value;
   }
      
   public function getAccess(){
       return $this->_access;
   }
   
   public function setDate($value){
       $this->_date = $value;
   }
   
   public function getDate(){
       return $this->_date;
   }
}
?>