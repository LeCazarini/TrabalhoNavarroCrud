<?php 
include_once "Connect.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/MVC/Model/Usuario.php";

class DAO_Usuario{

    private $_con;
    
    public function __construct(){
        $this->_con = new DAO_Connect();
    }
    
    public function isAuthenticated($email, $password){
    
        $response = false;
        $password = preg_replace('/[\s]+/', "", $password);
        $this->_con->connect();
        
        $result = mysqli_query($this->_con->getLink(), "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$password'");
        if(!$result){
            throw new Exception("Ocorreu um erro : ".mysqli_error($this->_con->getLink()));
        }
        
        $this->_con->disconnect();
         
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $response = $row['id'];
        }

        return $response;
    }
    
    public function insert(Model_Produto $produto){
        
        $this->_con->connect();
        
        $result = mysqli_query(
            $this->_con->getLink(), 
            "INSERT INTO produto (
                _id_produto,
                _nome_produto,
                _quantidade_produto,
                
            )
            VALUES (
                '{$produto->getId_produto()}',
                '{$produto->getNome_produto()}',
                '{$produto->getQuantidade_produto()}',
            );"
        );
        
        if(!$result){
            throw new Exception(mysqli_error($this->_con->getLink()));
        }
        $usuario->setId(mysqli_insert_id($this->_con->getLink()));
        $this->_con->disconnect();
         
        return $result;
    }
    
    public function update(){}
    
     /*
    *@return Model_Produto
    */
    public function select($id_produto){
        
        $produto = null;
        $this->_con->connect();
        
        $result = mysqli_query($this->_con->getLink(), "SELECT * FROM produto WHERE id = $id_produto");
        if(!$result){
            throw new Exception(mysqli_error($this->_con->getLink()));
        }
        
        $this->_con->disconnect();
        
        if(mysqli_num_rows($result) > 0){
             $row = mysqli_fetch_assoc($result);
             
             $produto = new Model_Usuario();
             $produto->setId_produto($row['id_produto']);
             $produto->setNome_priduto($row['nome_produto']);
             $produto->setQuantidade_produto($row['quantidade_produto']);
             
        }
       
       return $produto;
    }
    
    /*
    *@return Model_produto[] 
    */
    public function selectAll(){
        
        $produto = array();
        $this->_con->connect();
        
        $result = mysqli_query($this->_con->getLink(), "SELECT * FROM produto ORDER BY nome_produto");
        if(!$result){
            throw new Exception(mysqli_error($this->_con->getLink()));
        }
        
        $this->_con->disconnect();
        
        if(mysqli_num_rows($result) > 0){
             while($row = mysqli_fetch_assoc($result)){
                 $produto = new Model_Usuario();
                 $produto->setId_produto($row['id_produto']);
                 $produto->setNome_priduto($row['nome_produto']);
                 $produto->setQuantidade_produto($row['quantidade_produto']);
                 
                 array_push($produto, $produto);
             }
        }
       
       return $produto;
    }
    
    public function delete($id_produto){
        
        $this->_con->connect();
        
        $result = mysqli_query($this->_con->getLink(), "DELETE FROM produto WHERE id = $id_produto");
          if(!$result){
            throw new Exception(mysqli_error($this->_con->getLink()));
        }
        
        $this->_con->disconnect();
    }
}
?>