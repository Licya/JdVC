<?php

/**
 * Description of MessageController
 *
 * @author Licya
 */

namespace AppBundle\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Message;
use AppBundle\Form\MessageType;

class MessageController extends Controller
{

    public function indexAction()
    {
        $message = $this->getDoctrine()
                        ->getRepository('AppBundle:Message')->findAll();

        return $this->render('AppBundleAdminBundle:Message:listMessage.html.twig', array('message' => $message,));
    }

}
