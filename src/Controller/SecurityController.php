<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Form\RegistrationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;  //ajout du request
use Doctrine\Persistence\ObjectManager; //ajout du manager
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SecurityController extends AbstractController
{
    /**
     * @Route("/inscription", name="security_registration")
     */
    public function registration(Request $request, ObjectManager $manager, UserPasswordEncoderInterface $encoder)
    {
        $user = new User();
        $form = $this->createForm(RegistrationType::class, $user);
        
        $form->handleRequest($request); //analyse la request

        if($form->isSubmitted() && $form->isValid()) //si le form est envoy�:
        {
			$hash = $encoder->encodePassword($user, $user->GetPassword());
			$user->SetPassword($hash);
			
            $manager->persist($user); //persiste l�info dans le temps
            $manager->flush(); //envoie les info � la BDD
            
            return $this->redirectToRoute('security_login');
        }
        
        return $this->render('security/index.html.twig', [ 'form' => $form->createView() ]);
    }
    
    /**
     * @Route("/connexion", name="security_login")
     */
    public function login()
    {
        return $this->render('security/login.html.twig');
    }
    
    /**
     * @Route("/deconnexion", name="security_logout")
     */
    public function logout()
    {
    }
    
}
