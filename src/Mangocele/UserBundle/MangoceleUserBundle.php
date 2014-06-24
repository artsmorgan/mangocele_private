<?php

namespace Mangocele\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MangoceleUserBundle extends Bundle
{
    public function getParent(){
        return 'FOSUserBundle';
    }
}
