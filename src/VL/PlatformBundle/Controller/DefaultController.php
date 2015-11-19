<?php

namespace VL\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('VLPlatformBundle:Default:index.html.twig', array('name' => $name));
    }
}
