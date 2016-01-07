<?php
namespace Application\Form;

use Zend\Form\Form;

class CategoriaForm extends Form
{
    public function __construct()
    {
        parent::__construct('categoria');
        
        $this->add(array('name' => 'name', 'type' => 'text', 'options' => array('label' => 'Nome da Categoria'), 'attributes' => array('class' => 'form-control')));
        $this->add(array('name' => 'description', 'type' => 'textarea', 'options' => array('label' => 'Descrição da Categoria'), 'attributes' => array('class' => 'form-control','style' => 'min-width: 300px; min-height: 150px',)));
        $this->add(array('name' => 'logo', 'type' => 'file', 'options' => array('label' => 'Imagem da Categoria:')));
        $this->add(array('name' => 'cadastrar', 'type' => 'submit', 'attributes' => array('class' => 'btn btn-lg btn-info', 'value' => 'Cadastrar')));
    }
}

?>