<?php

namespace Mangocele\coreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorias
 */
class Categorias
{
    /**
     * @var string
     */
    private $titulo;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var integer
     */
    private $createdBy;

    /**
     * @var \DateTime
     */
    private $createdWhen;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set titulo
     *
     * @param string $titulo
     * @return Categorias
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Categorias
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set createdBy
     *
     * @param integer $createdBy
     * @return Categorias
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
     * @return Categorias
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

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    public function __toString()
    {
        return $this->titulo;
    }
}
