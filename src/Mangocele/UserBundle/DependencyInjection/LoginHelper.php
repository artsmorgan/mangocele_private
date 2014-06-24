<?php
/**
 * Created by JetBrains PhpStorm.
 * User: amorgan
 * Date: 6/8/14
 * Time: 10:51 AM
 * To change this template use File | Settings | File Templates.
 */

namespace Mangocele\UserBundle\DependencyInjection;


class LoginHelper {

    //Return password in md5
    public function toMd5($password){
        return md5($password);
    }



}