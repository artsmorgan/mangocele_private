<?php

namespace Mangocele\coreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Empresas
 */
class Empresas
{
    /**
     * @var integer
     */
    private $idCliente;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var string
     */
    private $telefonoOficina;

    /**
     * @var string
     */
    private $telefonoEmpresa;

    /**
     * @var string
     */
    private $fax;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $direccion;

    /**
     * @var float
     */
    private $cordX;

    /**
     * @var float
     */
    private $cordY;

    /**
     * @var string
     */
    private $facebook;

    /**
     * @var string
     */
    private $twitter;

    /**
     * @var string
     */
    private $linkedin;

    /**
     * @var string
     */
    private $youtube;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set idCliente
     *
     * @param integer $idCliente
     * @return Empresas
     */
    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;

        return $this;
    }

    /**
     * Get idCliente
     *
     * @return integer 
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Empresas
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Empresas
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
     * Set telefonoOficina
     *
     * @param string $telefonoOficina
     * @return Empresas
     */
    public function setTelefonoOficina($telefonoOficina)
    {
        $this->telefonoOficina = $telefonoOficina;

        return $this;
    }

    /**
     * Get telefonoOficina
     *
     * @return string 
     */
    public function getTelefonoOficina()
    {
        return $this->telefonoOficina;
    }

    /**
     * Set telefonoEmpresa
     *
     * @param string $telefonoEmpresa
     * @return Empresas
     */
    public function setTelefonoEmpresa($telefonoEmpresa)
    {
        $this->telefonoEmpresa = $telefonoEmpresa;

        return $this;
    }

    /**
     * Get telefonoEmpresa
     *
     * @return string 
     */
    public function getTelefonoEmpresa()
    {
        return $this->telefonoEmpresa;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return Empresas
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Empresas
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Empresas
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set cordX
     *
     * @param float $cordX
     * @return Empresas
     */
    public function setCordX($cordX)
    {
        $this->cordX = $cordX;

        return $this;
    }

    /**
     * Get cordX
     *
     * @return float 
     */
    public function getCordX()
    {
        return $this->cordX;
    }

    /**
     * Set cordY
     *
     * @param float $cordY
     * @return Empresas
     */
    public function setCordY($cordY)
    {
        $this->cordY = $cordY;

        return $this;
    }

    /**
     * Get cordY
     *
     * @return float 
     */
    public function getCordY()
    {
        return $this->cordY;
    }

    /**
     * Set facebook
     *
     * @param string $facebook
     * @return Empresas
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * Get facebook
     *
     * @return string 
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * Set twitter
     *
     * @param string $twitter
     * @return Empresas
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;

        return $this;
    }

    /**
     * Get twitter
     *
     * @return string 
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * Set linkedin
     *
     * @param string $linkedin
     * @return Empresas
     */
    public function setLinkedin($linkedin)
    {
        $this->linkedin = $linkedin;

        return $this;
    }

    /**
     * Get linkedin
     *
     * @return string 
     */
    public function getLinkedin()
    {
        return $this->linkedin;
    }

    /**
     * Set youtube
     *
     * @param string $youtube
     * @return Empresas
     */
    public function setYoutube($youtube)
    {
        $this->youtube = $youtube;

        return $this;
    }

    /**
     * Get youtube
     *
     * @return string 
     */
    public function getYoutube()
    {
        return $this->youtube;
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
        return $this->nombre;
    }
}
