<?php
require __DIR__ . '/../vendor/autoload.php';

use Alura\Cursos\Controller\ListarCursos;
use Alura\Cursos\Controller\FormularioInsercao;


$uri = $_SERVER['REQUEST_URI'];

if($uri === '/novo-curso'):
    $controlador = new FormularioInsercao();
    $controlador->processaRequisicao();

    elseif($uri === '/listar-cursos'):
        $controlador = new ListarCursos();
        $controlador->processaRequisicao();

    elseif($uri === '/index.php'):
        require 'index.php';

        else:
            echo "OPS... ERRO 404 - VEREIFIQUE A HORTOGRAFIA E TENTE NOVAMENTE";
endif;