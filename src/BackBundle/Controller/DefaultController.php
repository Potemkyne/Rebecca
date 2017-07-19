<?php

namespace BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use BackBundle\Entity\Movie;
use BackBundle\Entity\Cast;
use BackBundle\Entity\Gallery;
use BackBundle\Entity\Award;
use BackBundle\Entity\Company;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BackBundle:Default:index.html.twig');
    }
    
    public function showAllMovieAction() {
        $repository = $this->getDoctrine()->getManager()->getRepository('BackBundle:Movie');
        $rows = $repository->findAll();
        return $this->render("BackBundle:Default:showAllMovie.html.twig", array('rows' => $rows));
    }
}
