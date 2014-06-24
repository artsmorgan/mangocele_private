<?php

namespace Mangocele\coreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Articulos
 */
class Articulos
{
    /**
     * @var string
     */
    private $titulo;

    /**
     * @var string
     */
    private $contenido;

    /**
     * @var string
     */
    private $fechaCreacion;

    /**
     * @var integer
     */
    private $archivado;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Mangocele\coreBundle\Entity\Clientes
     */
    private $idCliente;

    /**
     * @var \Mangocele\coreBundle\Entity\Secciones
     */
    private $idSeccion;


    /**
     * Set titulo
     *
     * @param string $titulo
     * @return Articulos
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
     * Set contenido
     *
     * @param string $contenido
     * @return Articulos
     */
    public function setContenido($contenido)
    {
        $this->contenido = $contenido;

        return $this;
    }

    /**
     * Get contenido
     *
     * @return string 
     */
    public function getContenido()
    {
        return $this->contenido;
    }

    /**
     * Set fechaCreacion
     *
     * @param string $fechaCreacion
     * @return Articulos
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;

        return $this;
    }

    /**
     * Get fechaCreacion
     *
     * @return string 
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * Set archivado
     *
     * @param integer $archivado
     * @return Articulos
     */
    public function setArchivado($archivado)
    {
        $this->archivado = $archivado;

        return $this;
    }

    /**
     * Get archivado
     *
     * @return integer 
     */
    public function getArchivado()
    {
        return $this->archivado;
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
     *
     * @param \Mangocele\coreBundle\Entity\Clientes $idCliente
     * @return Articulos
     */
    public function setIdCliente(\Mangocele\coreBundle\Entity\Clientes $idCliente = null)
    {
        $this->idCliente = $idCliente;

        return $this;
    }

    /**
     * Get idCliente
     *
     * @return \Mangocele\coreBundle\Entity\Clientes 
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * Set idSeccion
     *
     * @param \Mangocele\coreBundle\Entity\Secciones $idSeccion
     * @return Articulos
     */
    public function setIdSeccion(\Mangocele\coreBundle\Entity\Secciones $idSeccion = null)
    {
        $this->idSeccion = $idSeccion;

        return $this;
    }

    /**
     * Get idSeccion
     *
     * @return \Mangocele\coreBundle\Entity\Secciones 
     */
    public function getIdSeccion()
    {
        return $this->idSeccion;
    }
}
