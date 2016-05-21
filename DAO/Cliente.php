<?php 
include_once "Connect.php";
include_once "../Model/Usuario.php";

class DAO_Cliente{

    private $_con;
    
    public function __construct(){
        $this->_con = new DAO_Connect();
    }
    
   
    
    public function insert(Model_Cliente $cliente){
        
        $this->_con->connect();
        
        $result = mysqli_query(
            $this->_con->getLink(), 
            "INSERT INTO cliente (
                nome,
                endereco,
                numero,
                telefone,
                cpf,
            )
            VALUES (
                '{$cliente->getNome()}',
                '{$cliente->getEndereco()}',
                '{$cliente->getNumero()}',
                '{$cliente->getTelefone()}',
                '{$cliente->getCpf()}'
            );"
        );
        
        if(!$result){
            throw new Exception(mysqli_error($this->_con->getLink()));
        }
        $cliente->setId(mysqli_insert_id($this->_con->getLink()));
        $this->_con->disconnect();
         
        return $result;
    }
    
    public function update(){}
    
     /*
    *@return Model_Cliente
    */
    public function select($id_cliente){
        
        $cliente = null;
        $this->_con->connect();
        
        $result = mysqli_query($this->_con->getLink(), "SELECT * FROM cliente WHERE id = $_id_cliente");
        if(!$result){
            throw new Exception(mysqli_error($this->_con->getLink()));
        }
        
        $this->_con->disconnect();
        
        if(mysqli_num_rows($result) > 0){
             $row = mysqli_fetch_assoc($result);
             
             $cliente = new Model_Cliente();
             $cliente->setId_cliente($row['id_cliente']);
             $cliente->setNome($row['nome']);
             $cliente->setEndereco($row['endereco']);
             $cliente->setTefefone($row['telefone']);
             $cliente->setCpf($row['cpf']);
             
        }
       
       return $cliente;
    }
    
    /*
    *@return Model_Cliente[] 
    */
    public function selectAll(){
        
        $cliente = array();
        $this->_con->connect();
        
        $result = mysqli_query($this->_con->getLink(), "SELECT * FROM cliente ORDER BY nome");
        if(!$result){
            throw new Exception(mysqli_error($this->_con->getLink()));
        }
        
        $this->_con->disconnect();
        
        if(mysqli_num_rows($result) > 0){
             while($row = mysqli_fetch_assoc($result)){
                 $cliente = new Model_Cliente();
                 $cliente->setId_cliente($row['id_cliente']);
                 $cliente->setNome($row['nome']);
                 $cliente->setEndereco($row['endereco']);
                 $cliente->setTefefone($row['telefone']);
                 $cliente->setCpf($row['cpf']);
                 
                 array_push($cliente, $cliente);
             }
        }
       
       return $cliente;
    }
    
    public function delete($id_cliente){
        
        $this->_con->connect();
        
        $result = mysqli_query($this->_con->getLink(), "DELETE FROM cliente WHERE id = $id_cliente");
          if(!$result){
            throw new Exception(mysqli_error($this->_con->getLink()));
        }
        
        $this->_con->disconnect();
    }
}
?>