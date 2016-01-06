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
        $this->getEntityManager();
        return new ViewModel(['ProdutoForm' => $ProdutoForm]);
    }
    
    public function getEntityManager()
    {
        if($this->entityManager == null) $this->entityManager = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
        return $this->entityManager;
    }
}

