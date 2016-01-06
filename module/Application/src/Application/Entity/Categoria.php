<?php
namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/** 
* @ORM\Entity 
**/
class Categoria
{
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
}

?>