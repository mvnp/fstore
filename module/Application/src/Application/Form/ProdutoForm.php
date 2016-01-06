<?php
namespace Application\Form;

use Zend\Form\Form;

class ProdutoForm extends Form
{
    public function __construct()
    {
        parent::_construct("produto");
        
        $this->add();
    }
}

?>