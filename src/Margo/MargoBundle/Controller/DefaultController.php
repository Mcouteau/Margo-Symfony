<?php

namespace Margo\MargoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MargoMargoBundle:Default:index.html.twig', array('name' => $name));
    }
}
