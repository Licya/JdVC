<?php

/**
 * Description of CitizenController
 *
 * @author Licya
 */

namespace AppBundle\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Citizen;
use AppBundle\Form\CitizenType;

class CitizenController extends Controller
{

    public function indexAction()
    {
                $citizen = $this->getDoctrine()
                        ->getRepository('AppBundle:Citizen')->findAll();

        return $this->render('AppBundleAdminBundle:Citizen:listCitizen.html.twig', array('citizens' => $citizen,));
    }

}
