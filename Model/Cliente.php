<?php 

class Moldel_Cliente{
    
   private $_id_cliente;
   private $_nome;
   private $_endereco;
   private $_numero;
   private $_telefone;
   private $_cpf;
   
   public function __Contruct(){}
   
   public function setId_cliente($value){
       this->$_id_cliente = $value;
   }
   
   public function getId_cliente(){
       return this->$_id_cliente;
   }
   
   public function setNome($value){
       this->$_name = $value;
   }
   
   public function getId_cliente(){
       return this->$_nome;
   }
   
   public function setEndereco($value){
       this->$endereco = $value;
   }
   
   public function getEndereco(){
       return this->$endereco;
   }
   
   public function setTelefone($value){
       this->$telefone = $value;
   }
   
   public function getEndereco(){
       return this->$endereco;
   }
   
   public function setCpf($value){
       this->$cpf = $value;
   }
   
   public function getCpf(){
       return this->$cpf;
   }
}

?>