<?php

namespace Mangocele\coreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Productos
 */
class Productos
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
     * @var string
     */
    private $cantidad;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Mangocele\coreBundle\Entity\Empresas
     */
    private $idCliente;


    /**
     * Set titulo
     *
     * @param string $titulo
     * @return Productos
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
     * @return string
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
     * Set cantidad
     *
     * @param string $cantidad
     * @return Productos
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return string 
     */
    public function getCantidad()
    {
        return $this->cantidad;
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
     * Set idCliente

     */
    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;

        return $this;
    }

    /**
     * Get idCliente
     *
     * @return \Mangocele\coreBundle\Entity\Empresas
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }
    /**
     * @var integer
     */
    private $idEmpresa;

    /**
     * @var string
     */
    private $dimensiones;

    /**
     * @var string
     */
    private $peso;

    /**
     * @var float
     */
    private $valoracion;

    /**
     * @var integer
     */
    private $createdBy;

    /**
     * @var \DateTime
     */
    private $createdWhen;


    /**
     * Set idEmpresa
     */
    public function setIdEmpresa($idEmpresa)
    {
        $this->idEmpresa = $idEmpresa;

        return $this;
    }

    /**
     * Get idEmpresa
     *
     */
    public function getIdEmpresa()
    {
        return $this->idEmpresa;
    }

    /**
     * Set dimensiones
     *
     * @param string $dimensiones
     * @return Productos
     */
    public function setDimensiones($dimensiones)
    {
        $this->dimensiones = $dimensiones;

        return $this;
    }

    /**
     * Get dimensiones
     *
     * @return string 
     */
    public function getDimensiones()
    {
        return $this->dimensiones;
    }

    /**
     * Set peso
     *
     * @param string $peso
     * @return Productos
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }

    /**
     * Get peso
     *
     * @return string 
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set valoracion
     *
     * @param float $valoracion
     * @return Productos
     */
    public function setValoracion($valoracion)
    {
        $this->valoracion = $valoracion;

        return $this;
    }

    /**
     * Get valoracion
     *
     * @return float 
     */
    public function getValoracion()
    {
        return $this->valoracion;
    }

    /**
     * Set createdBy
     *
     * @param integer $createdBy
     * @return Productos
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
     * @return Productos
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
}
