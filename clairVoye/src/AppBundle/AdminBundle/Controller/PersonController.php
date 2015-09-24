<?php

/**
 * Description of PersonController
 *
 * @author Licya
 */

namespace AppBundle\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Person;
use AppBundle\Form\PersonType;

class PersonController extends Controller
{

    public function indexAction()
    {
        $person = $this->getDoctrine()
                        ->getRepository('AppBundle:Person')->findAll();

        return $this->render('AppBundleAdminBundle:Person:listPerson.html.twig', array('person' => $person,));
    }

}
