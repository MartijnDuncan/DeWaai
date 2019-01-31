<?php

namespace App\Controller;

use App\Entity\Customer;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;


class PageController extends AbstractController {
    /**
     * @Route("/")
     */
    public function index(Request $request) {
        $register = new Customer();

        $form = $this->createFormBuilder($register)
//            ->add('date', DateType::class)
            ->add('firstName', TextType::class)
            ->add('lastName', TextType::class)
            ->add('gender', ChoiceType::class, [
                'choices' => [
                    'Man' => true,
                    'Vrouw' => false,
                ],
            ])
            ->add('birthDate', DateType::class)
            ->add('address', TextType::class)
            ->add('zipcode', TextType::class)
            ->add('city', TextType::class)
            ->add('phone', TextType::class)
            ->add('mail', TextType::class)
            ->add('save', SubmitType::class, ['label' => 'Inschrijven'])
            ->getForm();



        return $this->render('index.html.twig', [
            'form' => $form->createView(),
            ]
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
