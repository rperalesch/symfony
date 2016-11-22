<?php

namespace RPC\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('RPCUserBundle:Default:index.html.twig');
    }
}
