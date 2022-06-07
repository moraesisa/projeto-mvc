<?php

class funcionarioDAO
{
   
    private $conexao;


    
    function __construct() 
    {
        
        $dsn = "mysql:host=localhost:3307;dbname=db_sistema";
        $user = "root";
        $pass = "etecjau";
        
        
        $this->conexao = new PDO($dsn, $user, $pass);
    }


   
    function insert(funcionarioModel $model) 
    {
        
        $sql = "INSERT INTO funcionario 
                (nome, cargo) 
                VALUES (?, ?)";
        
        
        $stmt = $this->conexao->prepare($sql);

        
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->cargo);
       
        
       
        $stmt->execute();      
    }
    public function update(funcionarioModel $model)
    {
        $sql = "UPDATE funcionario SET nome=?, cargo=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->cargo);
        $stmt->bindValue(3, $model->id);

        $stmt->execute();
    }
    public function select()
    {
        $sql = "SELECT * FROM funcionario ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

       
        return $stmt->fetchAll(PDO::FETCH_CLASS);        
    }


    
    public function selectById(int $id)
    {
        include_once 'Model/funcionarioModel.php';

        $sql = "SELECT * FROM funcionario WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("funcionarioModel"); 
    }


    
    public function delete(int $id)
    {
        $sql = "DELETE FROM funcionario WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }









}
