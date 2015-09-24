<?php

namespace AppBundle\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AppBundleAdminBundle:Default:index.html.twig', array('name' => $name));
    }
}
