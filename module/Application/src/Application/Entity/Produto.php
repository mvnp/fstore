<?php
namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/*
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
    
    private $produto_name;
    private $produto_price;
    private $produto_description;
    private $produto_rate;
}

?>