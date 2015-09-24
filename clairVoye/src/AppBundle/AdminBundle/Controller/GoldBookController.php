<?php
/**
 * Description of GoldBookController
 *
 * @author Licya
 */

namespace AppBundle\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\GoldBook;
use AppBundle\Form\GoldBookType;

class GoldBookController extends Controller
{
        public function indexAction()
    {
                $goldBook = $this->getDoctrine()
                        ->getRepository('AppBundle:GoldBook')->findAll();

        return $this->render('AppBundleAdminBundle:GoldBook:listGoldBook.html.twig', array('goldBook' => $goldBook,));
    }
}
