<?php
namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;


/** 
* @ORM\Entity 
**/
class Categoria implements InputFilterAwareInterface
{
    
    protected $inputFilter;
    
    /**     
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     **/    
    private $categoria_id;
    
    /**
     * 
     * @ORM\Column(type="string", length=150)
     **/
    private $categoria_name;
    
    /**
     *
     * @ORM\Column(type="datetime")
     **/
    private $categoria_created;
    
    /**     
     * @ORM\Column(type="string", length=200)
     **/
    private $categoria_description;

    /**
     * @ORM\Column(type="string")     
     */
    private $categoria_logo;
    
    
    // ---------------------------------------------------------------------------------------- //
    
    public function setInputFilter(InputFilterInterface $inputFilter)
    {
        $this->inputFilter = $inputFilter;
    }
    
    public function getInputFilter()
    {
        return $this->inputFilter;
    }

    public function getCategoriaId()
    {
        return $this->categoria_id;
    }

    public function setCategoriaId($categoria_id)
    {
        $this->categoria_id = $categoria_id;
        return $this;
    }

    public function getCategoriaName()
    {
        return $this->categoria_name;
    }

    public function setCategoriaName($categoria_name)
    {
        $this->categoria_name = $categoria_name;
        return $this;
    }

    public function getCategoriaCreated()
    {
        return $this->categoria_created;
    }

    public function setCategoriaCreated($categoria_created)
    {
        $this->categoria_created = $categoria_created;
        return $this;
    }

    public function getCategoriaDescription()
    {
        return $this->categoria_description;
    }

    public function setCategoriaDescription($categoria_description)
    {
        $this->categoria_description = $categoria_description;
        return $this;
    }

    public function getCategoriaLogo()
    {
        return $this->categoria_logo;
    }

    public function setCategoriaLogo($categoria_logo)
    {
        $this->categoria_logo = $categoria_logo;
        return $this;
    }
 
}

?>