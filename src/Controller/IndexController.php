<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController {
    /**
     * @Route("/index")
     */
    public function number() {
        $number = random_int(0,100);

        return $this->render('number.html.twig', [
            'number' => $number]
        );

    }
}
