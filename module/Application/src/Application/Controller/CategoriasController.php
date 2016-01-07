<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

use Application\Form\CategoriaForm;
use Application\Entity\Categoria;


class CategoriasController extends AbstractActionController
{
    private $entityManager;    
    
    public function indexAction()
    {
        return new ViewModel();
    }
    
    public function addAction()
    {
        $CategoriaForm = new CategoriaForm();
        $request = $this->getRequest();        
        
        if($request->isPost())
        {
            $path = './public/img/Itens/';            
            $name = $_FILES['logo']['name'];
            $tmp = $_FILES['logo']['tmp_name'];       
            
            mkdir($path.$request->getPost('name')); // Criando pasta para armazenar os produtos 
            mkdir($path.$request->getPost('name')."/logo"); // Criando pasta para armazenar o Logo da categoria.
            
            //$path .= $path . $request->getPost('name');

            $categoria = new Categoria();
            //$CategoriaForm->setInputFilter($categoria->getInputFilter());
            
            
            $this->flashMessenger()->addSuccessMessage($path . $request->getPost('name'). "/logo");
           
            
            if(move_uploaded_file($_FILES['logo']['tmp_name'], $path . $request->getPost('name'). "/logo/")) //&& $CategoriaForm->isValid())
            {                
                $this->flashMessenger()->addSuccessMessage("Arquivo cadastrado com sucesso");                
                $em = $this->getEntityManager();
                
                $categoria->setCategoriaCreated(new \DateTime("now"));
                $categoria->setCategoriaName($request->getPost('name'));
                $categoria->setCategoriaDescription($request->getPost('description'));
                $categoria->setCategoriaLogo($path . "logo/".$_FILES['logo']['name']);
                $em->persist($categoria);
                $em->flush();
            }          
            
            else $this->flashMessenger()->addErrorMessage("Falha ao subir arquivo!");
            
            return $this->redirect()->toRoute('categorias-add');
            
        }
        
        return new ViewModel(['CategoriaForm' => $CategoriaForm]);
    }
    
    public function getEntityManager()
    {
        if($this->entityManager == null) $this->entityManager = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
        return $this->entityManager;
    }

}

