<?php
/**
 * Created by JetBrains PhpStorm.
 * User: amorgan
 * Date: 6/15/14
 * Time: 9:54 AM
 * To change this template use File | Settings | File Templates.
 */

namespace Mangocele\coreBundle\services;
use Doctrine\ORM\EntityManager;


class UserService {
    /**
     *
     * @var EntityManager
     */
   // protected $em;

    public function __construct(EntityManager $em)
    {
        $em->getRepository('MangoceleUserBundle:User');
    }

    public function getUser(){
        var_dump($this->em ); // outputs null
    }
}