<?php

class categoriaDAO
{
   
    private $conexao;


    
    function __construct() 
    {
        
        $dsn = "mysql:host=localhost:3307;dbname=db_sistema";
        $user = "root";
        $pass = "etecjau";
        
        
        $this->conexao = new PDO($dsn, $user, $pass);
    }


   
    function insert(categoriaModel $model) 
    {
        
        $sql = "INSERT INTO categoria 
                (descricao) 
                VALUES (?)";
        
        
        $stmt = $this->conexao->prepare($sql);

        
        $stmt->bindValue(1, $model->descricao);
        
       
        
       
        $stmt->execute();      
    }
    public function update(categoriaModel $model)
    {
        $sql = "UPDATE categoria SET descricao=?  WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->descricao);
        $stmt->bindValue(2, $model->id);

        $stmt->execute();
    }
    public function select()
    {
        $sql = "SELECT * FROM categoria ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

       
        return $stmt->fetchAll(PDO::FETCH_CLASS);        
    }


    
    public function selectById(int $id)
    {
        include_once 'Model/categoriaModel.php';

        $sql = "SELECT * FROM categoria WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("categoriaModel"); 
    }


    
    public function delete(int $id)
    {
        $sql = "DELETE FROM categoria WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }









}
