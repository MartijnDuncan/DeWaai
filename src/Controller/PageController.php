<?php

namespace App\Controller;

use App\Entity\Customer;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController {
    /**
     * @Route("/")
     */
    public function index(Request $request) {
        $register = new Customer();
        $register->setFirstName('Voornaam');
        $register->setLastName('Achternaam');



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

    public function signin() {
        return $this->render('signin.html.twig'
        );
    }

    public function courseInfo() {
        return $this->render('course-info.html.twig'
        );
    }
    public function contact() {
        return $this->render('contact.html.twig'
        );
    }
    
}
