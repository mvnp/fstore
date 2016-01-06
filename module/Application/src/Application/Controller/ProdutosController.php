<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Form\ProdutoForm;

class ProdutosController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
    
    public function addAction()
    {
        $ProdutoForm = new ProdutoForm();
        
        return new ViewModel(['ProdutoForm' => $ProdutoForm]);
    }
}

