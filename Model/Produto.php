<?php 

class Moldel_Produto{
    
   private $_id_produto;
   private $_nome_produto;
   private $quantidade_produto;

 
   
   public function __Contruct(){}
   
   public function setId_produto($value){
       $this->$_id_produto = $value;
   }
   
   public function getId_produto(){
       return $this->$_id_produto;
   }
   
   public function setNome_produto($value){
       $this->$_nome_produto = $value;
   }
   
   public function getNome_produto(){
       return $this->$_nome_produto;
   }
   
   public function setQuantidade_produto($value){
       $this->$quantidade_produto = $value;
   }
   
   public function getQuantidade_produto(){
       return $this->$quantidade_produto;
   }
   
  
}

?>