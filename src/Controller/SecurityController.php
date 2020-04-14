<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Form\RegistrationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;  //ajout du request
use Doctrine\Persistence\ObjectManager; //ajout du manager

class SecurityController extends AbstractController
{
    /**
     * @Route("/inscription", name="security_registration")
     */
    public function registration(Request $request, ObjectManager $manager)
    {
        $user = new User();
        $form = $this->createForm(RegistrationType::class, $user);
        
        $form->handleRequest($request); //analyse la request
        
        if($form->isSubmitted() && $form->isValid()) //si le form est envoy�:
        {
            $manager->persist($user); //persiste l�info dans le temps
            $manager->flush(); //envoie les info � la BDD
        }
        
        return $this->render('security/index.html.twig', [ 'form' => $form->createView() ]);
    }
}
