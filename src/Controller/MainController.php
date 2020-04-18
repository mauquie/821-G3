<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\TicketType;
use App\Entity\TicketList;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;  //ajout du request
use Doctrine\Persistence\ObjectManager; //ajout du manager
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index()
    {
		$presentation = "Une petite présentation du projet et de notre équipe";
		
		
		
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController', 'presentation' => $presentation,
        ]);
    }
	
	
	
	/**
     * @Route("/ticket", name="openticket")
     */
    public function openticket(Request $request, ObjectManager $manager, UserPasswordEncoderInterface $encoder, SessionInterface $session)
    {
		

		$TicketList = new TicketList();
        $form = $this->createForm(TicketType::class, $TicketList);
        $form->handleRequest($request);
		$username = $request->get('username');
		$user = $this->getUser();
		$mail =  $user->getEmail();

        if($form->isSubmitted() && $form->isValid()) //si le form est envoyé:
        {
			$TicketList->setUserRequest($mail);
			$TicketList->SetStatus("open");
			$TicketList->SetResult("none"); 
            $manager->persist($TicketList); //persiste l’info dans le temps
            $manager->flush(); //envoie les info à la BDD
            
            return $this->redirectToRoute('main');
        }
	
		
        return $this->render('main/ticket.html.twig',[ 'form' => $form->createView() ]);
    }
	
	
	
	
	
	/**
     * @Route("/admin", name="admin")
     */
    public function admin()
    {
        $repo = $this->getDoctrine()->getRepository(TicketList::class);
	    $tickets = $repo->FindAll();
		
        return $this->render('main/admin.html.twig', ['tickets' => $tickets]);
    }	
}
