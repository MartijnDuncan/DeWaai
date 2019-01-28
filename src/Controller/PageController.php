<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController {
    /**
     * @Route("/")
     */
    public function index() {

        return $this->render('index.html.twig'
        );

    }

    public function course() {
        return $this->render('course.html.twig'
        );
    }

    public function boats() {
        return $this->render('boats.html.twig'
        );
    }
    
}
