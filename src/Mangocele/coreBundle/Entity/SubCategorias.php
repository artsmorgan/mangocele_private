<?php

namespace Mangocele\coreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SubCategorias
 */
class SubCategorias
{
    /**
     * @var string
     */
    private $titulo;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Mangocele\coreBundle\Entity\Categorias
     */
    private $idCategoria;


    /**
     * Set titulo
     *
     * @param string $titulo
     * @return SubCategorias
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idCategoria
     *
     * @param \Mangocele\coreBundle\Entity\Categorias $idCategoria
     * @return SubCategorias
     */
    public function setIdCategoria(\Mangocele\coreBundle\Entity\Categorias $idCategoria = null)
    {
        $this->idCategoria = $idCategoria;

        return $this;
    }

    /**
     * Get idCategoria
     *
     * @return \Mangocele\coreBundle\Entity\Categorias 
     */
    public function getIdCategoria()
    {
        return $this->idCategoria;
    }
    /**
     * @var integer
     */
    private $createdBy;

    /**
     * @var \DateTime
     */
    private $createdWhen;


    /**
     * Set createdBy
     *
     * @param integer $createdBy
     * @return SubCategorias
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return integer 
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set createdWhen
     *
     * @param \DateTime $createdWhen
     * @return SubCategorias
     */
    public function setCreatedWhen($createdWhen)
    {
        $this->createdWhen = $createdWhen;

        return $this;
    }

    /**
     * Get createdWhen
     *
     * @return \DateTime 
     */
    public function getCreatedWhen()
    {
        return $this->createdWhen;
    }

    public function __toString()
    {
        return $this->titulo;
    }
}
