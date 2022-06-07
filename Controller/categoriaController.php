<?php


class categoriaController 
{
    
    public static function index() 
    {
        include 'Model/categoriaModel.php';
        
        $model = new categoriaModel(); 
        $model->getAllRows();
                   
        include 'View/modules/categoria/listacategoria.php';

    }



   
    public static function form()
    {
        
        include 'Model/categoriaModel.php'; 
        $model = new categoriaModel();
        
        if(isset($_GET['id'])) 
            $model = $model->getById( (int) $_GET['id']);
        
        include 'View/modules/categoria/Formcategoria.php';
    }

    
    public static function save() {

        include 'Model/categoriaModel.php'; 

        
        $categoria = new categoriaModel();
        $categoria->id = $_POST['id'];
        $categoria->descricao = $_POST['descricao'];
       
       
        $categoria->save();  

    
        header("Location: /categoria"); 

  
    }

    public static function delete()
    {
        include 'Model/categoriaModel.php'; 

        $model = new categoriaModel();

        $model->delete( (int) $_GET['id'] ); 

        header("Location: /categoria"); 
    }

}