<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Form\ProdutoForm;

class ProdutosController extends AbstractActionController
{
    private $entityManager;
    
    public function indexAction()
    {
        return new ViewModel();
    }
    
    public function addAction()
    {
        $ProdutoForm = new ProdutoForm();
        $qb = $this->getEntityManager()->getRepository('Application\Entity\Categoria')->createQueryBuilder('c');
        $categorias =  $qb->select(); 
        
        return new ViewModel(['ProdutoForm' => $ProdutoForm, 'Categorias' => $categorias]);
    }
    
    public function getEntityManager()
    {
        if($this->entityManager == null) $this->entityManager = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
        return $this->entityManager;
    }
}

