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
            ->add('firstName', TextType::class, ['label' => 'Voornaam'])
            ->add('lastName', TextType::class, ['label' => 'Achternaam'])
            ->add('gender', ChoiceType::class, [
                'choices' => [
                    'Man' => true,
                    'Vrouw' => false,
                ],'label' => 'Geslacht'
            ])
            ->add('birthDate', DateType::class, ['label' => 'Geboortedatum'])
            ->add('address', TextType::class, ['label' => 'Adres'])
            ->add('zipcode', TextType::class, ['label' => 'Postcode'])
            ->add('city', TextType::class, ['label' => 'Stad'])
            ->add('phone', TextType::class, ['label' => 'Telefoonnummer'])
            ->add('mail', TextType::class, ['label' => 'Email'])
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
    public function admin() {
        return $this->render('admin.html.twig'
        );
    }
    
}
