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
    
    public function insert(Model_Cliente $usuario){
        
        $this->_con->connect();
        
        $result = mysqli_query(
            $this->_con->getLink(), 
            "INSERT INTO usuarios (
                nome,
                email,
                senha,
                nivel_acesso_id
            )
            VALUES (
                '{$usuario->getName()}',
                '{$usuario->getEmail()}',
                '{$usuario->getPassword()}',
                {$usuario->getAccess()}
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
    *@return Model_Usuario
    */
    public function select($id_usuario){
        
        $usuario = null;
        $this->_con->connect();
        
        $result = mysqli_query($this->_con->getLink(), "SELECT * FROM usuarios WHERE id = $id_usuario");
        if(!$result){
            throw new Exception(mysqli_error($this->_con->getLink()));
        }
        
        $this->_con->disconnect();
        
        if(mysqli_num_rows($result) > 0){
             $row = mysqli_fetch_assoc($result);
             
             $usuario = new Model_Usuario();
             $usuario->setId($row['id']);
             $usuario->setName($row['nome']);
             $usuario->setEmail($row['email']);
             $usuario->setPassword($row['senha']);
             $usuario->setAccess($row['nivel_acesso_id']);
             $usuario->setDate($row['created']);
        }
       
       return $usuario;
    }
    
    /*
    *@return Model_Usuario[] 
    */
    public function selectAll(){
        
        $usuarios = array();
        $this->_con->connect();
        
        $result = mysqli_query($this->_con->getLink(), "SELECT * FROM usuarios ORDER BY nome");
        if(!$result){
            throw new Exception(mysqli_error($this->_con->getLink()));
        }
        
        $this->_con->disconnect();
        
        if(mysqli_num_rows($result) > 0){
             while($row = mysqli_fetch_assoc($result)){
                 $usuario = new Model_Usuario();
                 $usuario->setId($row['id']);
                 $usuario->setName($row['nome']);
                 $usuario->setEmail($row['email']);
                 $usuario->setPassword($row['senha']);
                 $usuario->setAccess($row['nivel_acesso_id']);
                 $usuario->setDate($row['created']);
                 
                 array_push($usuarios, $usuario);
             }
        }
       
       return $usuarios;
    }
    
    public function delete($id_usuario){
        
        $this->_con->connect();
        
        $result = mysqli_query($this->_con->getLink(), "DELETE FROM usuarios WHERE id = $id_usuario");
          if(!$result){
            throw new Exception(mysqli_error($this->_con->getLink()));
        }
        
        $this->_con->disconnect();
    }
}
?>