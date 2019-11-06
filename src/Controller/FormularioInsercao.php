<?php
namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;

class FormularioInsercao implements InterfaceControladorRequisicao
{
    private $repositorioDeCursos;

    public function __construct()
    {
        $entityManager = (new EntityManagerCreator())
            ->getEntityManager();
         $this->repositorioDeCursos = $entityManager
             ->getRepository(Curso::class);
    }

    public function processaRequisicao(): void
    {
        require __DIR__. '/../../view/cursos/form-novo-curso.php';
    }
}