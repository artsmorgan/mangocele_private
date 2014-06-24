<?php

namespace Mangocele\coreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClientesImg
 */
class ClientesImg
{
    /**
     * @var string
     */
    private $urlImage;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Mangocele\coreBundle\Entity\Clientes
     */
    private $idCliente;


    /**
     * Set urlImage
     *
     * @param string $urlImage
     * @return ClientesImg
     */
    public function setUrlImage($urlImage)
    {
        $this->urlImage = $urlImage;

        return $this;
    }

    /**
     * Get urlImage
     *
     * @return string 
     */
    public function getUrlImage()
    {
        return $this->urlImage;
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
     * @return ClientesImg
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
}
