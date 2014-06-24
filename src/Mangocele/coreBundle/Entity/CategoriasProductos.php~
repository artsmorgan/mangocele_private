<?php

namespace Mangocele\coreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoriasProductos
 */
class CategoriasProductos
{
    /**
     * @var integer
     */
    private $idSubCategoria;

    /**
     * @var \Mangocele\coreBundle\Entity\SubCategorias
     */
    private $id;

    /**
     * @var \Mangocele\coreBundle\Entity\Productos
     */
    private $idProducto;


    /**
     * Set idSubCategoria
     *
     * @param integer $idSubCategoria
     * @return CategoriasProductos
     */
    public function setIdSubCategoria($idSubCategoria)
    {
        $this->idSubCategoria = $idSubCategoria;

        return $this;
    }

    /**
     * Get idSubCategoria
     *
     * @return integer 
     */
    public function getIdSubCategoria()
    {
        return $this->idSubCategoria;
    }

    /**
     * Set id
     *
     * @param \Mangocele\coreBundle\Entity\SubCategorias $id
     * @return CategoriasProductos
     */
    public function setId(\Mangocele\coreBundle\Entity\SubCategorias $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return \Mangocele\coreBundle\Entity\SubCategorias 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idProducto
     *
     * @param \Mangocele\coreBundle\Entity\Productos $idProducto
     * @return CategoriasProductos
     */
    public function setIdProducto(\Mangocele\coreBundle\Entity\Productos $idProducto = null)
    {
        $this->idProducto = $idProducto;

        return $this;
    }

    /**
     * Get idProducto
     *
     * @return \Mangocele\coreBundle\Entity\Productos 
     */
    public function getIdProducto()
    {
        return $this->idProducto;
    }
}
