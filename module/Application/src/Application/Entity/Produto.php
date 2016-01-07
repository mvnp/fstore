<?php
namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Produto
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO") 
     */
    private $produto_id;
    
    /**
     * 
     * @ORM\Column(type="string", length=100)
     */
    private $produto_name;
    
    /**
     * 
     * @ORM\Column(type="float")
     */
    private $produto_price;
    
    /**
     * 
     * @ORM\Column(type="text")
     */
    private $produto_description;
    
    /**
     * 
     * @ORM\Column(type="float")
     */
    private $produto_rate;
    
    /**
     * 
     * @ORM\Column(type="date")
     */
    private $produto_date;
    
    /**
     * @ORM\Column(type="float") 
     */
    private $produto_tdp;
    
    /**
     * @ORM\Column(type="string")
     *
     */
    private $produto_photo;
    
}

?>