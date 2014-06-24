<?php

namespace Mangocele\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     *
     * @ORM\Column(type="string")
     */
    protected $nombre;

    /**
     *
     * @ORM\Column(type="string")
     */
    protected $apellido1;

    /**
     *
     * @ORM\Column(type="string")
     */
    protected $apellido2;

    /**
     *
     * @ORM\Column(type="string")
     */
    protected $pais;

    public function setApellido1($apellido1)
    {
        $this->apellido1 = $apellido1;
    }

    public function getApellido1()
    {
        return $this->apellido1;
    }

    public function setApellido2($apellido2)
    {
        $this->apellido2 = $apellido2;
    }

    public function getApellido2()
    {
        return $this->apellido2;
    }

    public function setEmpresa($empresa)
    {
        $this->empresa = $empresa;
    }

    public function getEmpresa()
    {
        return $this->empresa;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setPais($pais)
    {
        $this->pais = $pais;
    }

    public function getPais()
    {
        return $this->pais;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }


    /**
     *
     * @ORM\Column(type="string")
     */
    protected $empresa;

    /**
     *
     * @ORM\Column(type="string")
     */
    protected $telefono;


    public function getExpiresAt()
    {
        return $this->expiresAt;
    }

    public function credentialsExpireAt()
    {
        return $this->expiresAt;
    }


}