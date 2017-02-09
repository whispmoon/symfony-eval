<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Publication;
use AppBundle\Form\PublicationType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class AppController
 * @package AppBundle\Controller
 */
class AppController extends Controller
{
    /**
     * Home page action.
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function homeAction()
    {
        $publications = $this
        ->getDoctrine()
        ->getRepository('AppBundle:Publication')
        ->findBy([],['publishedAt' => 'DESC'], 3);



        return $this->render('AppBundle:App:home.html.twig', [
            'publication_list' =>$publications,
        ]);
        // return $this->render('AppBundle:App:home.html.twig');
    }

    public function sciencesAction()
    {
        $sciences = $this
        ->getDoctrine()
        ->getRepository('AppBundle:Science')
        ->findBy([],['title' => 'DESC']);

        return $this->render('AppBundle:App:sciences.html.twig', [
            'science_list' =>$sciences,
        ]);

    }
}
