<?php

class categoriaModel
{
    
    public $id, $descricao ;

    public $rows;

   
    public function save()
    {
        include 'DAO/categoriaDAO.php';

        $dao = new categoriaDAO();

        
        if(empty($this->id))
        {
            
            $dao->insert($this);

        } else {

            $dao->update($this); 
        }

    }

    public function getAllRows()
    {
        include 'DAO/categoriaDAO.php'; 
        
       
        $dao = new categoriaDAO();

        
        $this->rows = $dao->select();
    }


    
    public function getById(int $id)
    {
        include 'DAO/categoriaDAO.php'; 

        $dao = new categoriaDAO();

        $obj = $dao->selectById($id); 

        
        return ($obj) ? $obj : new categoriaModel(); 

        
    }


   
    public function delete(int $id)
    {
        include 'DAO/categoriaDAO.php'; 

        $dao = new categoriaDAO();

        $dao->delete($id);
    }
}