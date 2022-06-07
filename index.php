<?php

$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

include 'Controller/PessoaController.php';

include 'Controller/produtoController.php';

include 'Controller/funcionarioController.php';

include 'Controller/categoriaController.php';

switch($uri_parse)
{

    case '/pessoa':
        PessoaController::index();
    break;

    case '/pessoa/form':
        PessoaController::form();
    break;

    case '/pessoa/save':
        PessoaController::save();
    break;

    case '/pessoa/delete':
        PessoaController::delete();
    break;


    
     case '/produto':
        produtoController::lista();

    break;

    case '/produto/form':
        produtoController::form();
    break;

    case '/produto/save':
        produtoController::save();
    break;

    case '/produto/delete':
        produtoController::delete();
    break;




    case '/categoria':
        categoriaController::index();
    break;

    case '/categoria/form':
        categoriaController::form();
    break;

    case '/categoria/save':
        categoriaController::save();
    break;

    case '/categoria/delete':
        categoriaController::delete();
    break;

    








    case '/funcionario':
        funcionarioController::index();
    break;

    case '/funcionario/form':
        funcionarioController::form();
    break;

    case '/funcionario/save':
        funcionarioController::save();
    break;

    case '/funcionario/delete':
        funcionarioController::delete();
    break;

    default:
        header("Location: /home");
    break;

    
    
    
    
}