<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/review", name="review_")
 */
class ReviewController extends Controller
{
    /**
     * @Route("/", name="index")
     * @Method("GET")
     */
    public function reviewIndex()
    {
        return $this->render("review/index.html.twig");
    }

    /**
     * @Route("/new", name="new")
     * @Method({"GET", "POST"})
     */
    public function reviewNew()
    {
        return $this->render("review/new.html.twig");
    }
}
