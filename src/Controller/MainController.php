<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\TicketType;
use App\Form\TalkticketType;
use App\Entity\Tickets;
use App\Entity\Chat;
use App\Entity\User;
use App\Form\TicketStatusType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;  //ajout du request
use Doctrine\Persistence\ObjectManager; //ajout du manager
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Form\RegistrationType;
use Symfony\Component\HttpFoundation\JsonResponse;
	



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
		

        $Tickets = new Tickets();
		//$Talkticket = new Talkticket();
		
        $form = $this->createForm(TicketType::class, $Tickets);
        $form->handleRequest($request);

		$user = $this->getUser();
		if ($user != NULL){
		$mail =  $user->getId();
		}

        if($form->isSubmitted() && $form->isValid()) //si le form est envoyé:
        {			
			//$TicketList->setUserRequest($mail);
			$Tickets->SetStatus("1");
			$Tickets->SetUser($user);
			//$Tickets->SetResult("none");
            $manager->persist($Tickets); //persiste l’info dans le temps
			$manager->flush(); //envoie les info à la BDD
			
			
			
			// $repo = $this->getDoctrine()->getRepository(TicketList::class);
			// $last = $repo->findBy(array(), array('tag' => 'desc'),1,0);
			// $tagAdd = $last[0]->getTag();
			// $tagAdd++;
			// $Talkticket->setName($mail);
			// $contenu = $form["contenu"]->getData();
			// $Talkticket->setText($contenu);
			// $Talkticket->setTag($tagAdd);
			
			
			
            return $this->redirectToRoute('myticket');
        }
		
		
		
	
		
        return $this->render('main/ticket.html.twig',[ 'form' => $form->createView() ]);
    }



	/**
    * @Route("/myticket", name="myticket")
    */
    public function myticket(Request $request, ObjectManager $manager, UserPasswordEncoderInterface $encoder, SessionInterface $session)
    {
        $opentickets = "";
        $user = $this->getUser();
        if ($user != NULL){
            $mail =  $user->getEmail();
            
            
            
            
            $repo = $this->getDoctrine()->getRepository(Tickets::class);
            
            $opentickets = $repo->findBy(array('user' => $mail));
        }
        $tickets = $repo->FindAll();
        
        
        
        $last = $repo->findBy(array(), array('id' => 'desc'),1,0);
        $TotalTicket = $last[0]->getId();
		
	return $this->render('main/myticket.html.twig',['tickets' => $tickets, 'TotalTicket' => $TotalTicket, 'opentickets' => $opentickets]);
    }
	
	
	
	
	/**
    * @Route("/myticket/{id}", name="myticketID")
    */
    public function myticketID($id, Request $request, ObjectManager $manager, UserPasswordEncoderInterface $encoder, SessionInterface $session)
    {

		$verif = "";
		$Chat = new Chat();	
		$Ticket = new Tickets();
		$opentickets = "";
		$user = $this->getUser();
	
		
		if ($user != NULL){
		$mail =  $user->getId();
		}
		
		
        $repoTicket = $this->getDoctrine()->getRepository(Tickets::class);
		$opentickets = $repoTicket->findBy(array('user' => $mail, 'id' => $id));
		$IdUser = $opentickets[0]->getUser();
		
		$repoUser = $this->getDoctrine()->getRepository(User::class);
		$GetNameUser = $repoUser->findBy(array('id' => $IdUser));
		$NameUser = $GetNameUser[0]->getUsername();
		

        $ticketId = $repoTicket->findBy(array('id' => $id));

		
		if (isset($opentickets[0])){
		$verif = $opentickets[0]->getUser();
		}
		
		if ($verif != $IdUser)
		{
		$opentickets = NULL;
		return $this->redirectToRoute('main');

		}else{
			$repoTalkTicket = $this->getDoctrine()->getRepository(Chat::class);
			$opentickets = $repoTalkTicket->findBy(array('tag' => $id));
			$form = $this->createForm(TalkticketType::class, $Chat);
			$form->handleRequest($request);
			$formTicket = $this->createForm(TicketStatusType::class, $Ticket);
            $formTicket->handleRequest($request);
	


        if($form->isSubmitted() && $form->isValid()) //si le form est envoyé:
        {
            $Chat->setUser($user);
            $Chat->setTag($id);
				

            $manager->persist($Chat); //persiste l’info dans le temps
			$manager->flush(); //envoie les info à la BDD

			return $this->redirect($request->getUri());
        }

		
		
		if($formTicket->isSubmitted() && $formTicket->isValid()) //si le form est envoyé:
        {
			
			$idTicket = $id;
		
			$entityManager = $this->getDoctrine()->getManager();
			$Ticket = $entityManager->getRepository(Tickets::class)->find($idTicket);
			
			$status = $formTicketList["status"]->getData();
			//$result = $formTicketList["result"]->getData();
			$Ticket->setStatus($status);
			//$Ticket->setResult($result);

			$entityManager->flush();


			return $this->redirect($request->getUri());
        }
	
	
	
        return $this->render('main/myticketID.html.twig',['opentickets' => $opentickets, 'ticketlists' => $ticketId, 'id' => $id, 'NameUser' => $NameUser, 'IdUser' => $IdUser, 'form' => $form->createView(), 'formTicketList' => $formTicket->createView() ]);
}
		
}	
	
		
	/**
     * @Route("/admin", name="admin")
     */
    public function admin(Request $request, ObjectManager $manager, UserPasswordEncoderInterface $encoder)
    {
        $repo = $this->getDoctrine()->getRepository(Tickets::class);
	    $tickets = $repo->FindAll();
		
		$satisfied = 70;
		$discontent = 100 - $satisfied;
		
		
		$last = $repo->findBy(array(), array('id' => 'desc'),1,0);
		$TotalTicket = $last[0]->getId();

        $user = new User();
        $form = $this->createForm(RegistrationType::class, $user);
        
        $form->handleRequest($request); //analyse la request

        if($form->isSubmitted() && $form->isValid()) //si le form est envoyé:
        {
			$hash = $encoder->encodePassword($user, $user->GetPassword());
			$user->SetPassword($hash);
			
            $manager->persist($user); //persiste l’info dans le temps
            $manager->flush(); //envoie les info à la BDD
            
			return $this->redirect($request->getUri());
        }



        return $this->render('main/admin.html.twig', ['tickets' => $tickets, 'TotalTicket' => $TotalTicket,'satisfied' => $satisfied, 'discontent' => $discontent, 'form' => $form->createView()]);
    }	
    
    /**
     * @Route("/adminticket/{id}", name="adminticket")
     */
    public function adminticket($id, Request $request, ObjectManager $manager, UserPasswordEncoderInterface $encoder, SessionInterface $session)
    {
        $Ticket = new Tickets();
        $opentickets = "";
        $user = $this->getUser();
        $repo2 = $this->getDoctrine()->getRepository(Tickets::class);
        $ticketlists = $repo2->findBy(array('id' => $id));
        
        
        
        $repoTicketList = $this->getDoctrine()->getRepository(Tickets::class);
        $opentickets = $repoTicketList->findBy(array('id' => $id));
        $IdUser = $opentickets[0]->getUser();
        
        $repoUser = $this->getDoctrine()->getRepository(User::class);
        $GetNameUser = $repoUser->findBy(array('id' => $IdUser));
        $NameUser = $GetNameUser[0]->getUsername();
        
        
        
        $Chat = new Chat();
        if ($user != NULL){
            $mail =  $user->getId();
            $repo = $this->getDoctrine()->getRepository(Chat::class);
            $opentickets = $repo->findBy(array('user' => $id));
        }
        
        
        $form = $this->createForm(TalkticketType::class, $Chat);
        $form->handleRequest($request);
        $formTicketList = $this->createForm(TicketStatusType::class, $Ticket);
        $formTicketList->handleRequest($request);
        
        
        if($form->isSubmitted() && $form->isValid()) //si le form est envoyé:
        {
            
            
            $Chat->setUser($user);
            $Chat->setTicket($id);
            
            $manager->persist($Chat); //persiste l’info dans le temps
            $manager->flush(); //envoie les info à la BDD
            
            return $this->redirect($request->getUri());
        }
        
        
        if($formTicketList->isSubmitted() && $formTicketList->isValid()) //si le form est envoyé:
        {
            
            $idTicket = $id;
            
            $entityManager = $this->getDoctrine()->getManager();
            $Ticket = $entityManager->getRepository(Tickets::class)->find($idTicket);
            
            $status = $formTicketList["status"]->getData();
            //$result = $formTicketList["result"]->getData();
            $Ticket->setStatus($status);
            //$Ticket->setResult($result);
            
            $entityManager->flush();
            
            
            return $this->redirect($request->getUri());
        }
        
        
        return $this->render('main/adminticket.html.twig',['opentickets' => $opentickets, 'ticketlists' => $ticketlists, 'id' => $id, 'IdUser' => $IdUser, 'NameUser' => $NameUser, 'form' => $form->createView(),  'formTicketList' => $formTicketList->createView() ]);
    }
	
	
	/**
    * @Route("/serviceticket/{id}", name="serviceticket")
    */
    public function serviceticket($id, Request $request, ObjectManager $manager, UserPasswordEncoderInterface $encoder, SessionInterface $session)
    {
		$Ticket = new Tickets();
		$opentickets = "";
		$user = $this->getUser();
		$repo2 = $this->getDoctrine()->getRepository(Tickets::class);
        $ticketlists = $repo2->findBy(array('id' => $id));



        $repoTicketList = $this->getDoctrine()->getRepository(Tickets::class);
		$opentickets = $repoTicketList->findBy(array('id' => $id));
		$IdUser = $opentickets[0]->getUser();
		
		$repoUser = $this->getDoctrine()->getRepository(User::class);
		$GetNameUser = $repoUser->findBy(array('id' => $IdUser));
		$NameUser = $GetNameUser[0]->getUsername();
		
		

		$Chat = new Chat();
		if ($user != NULL){
		$mail =  $user->getId();
		$repo = $this->getDoctrine()->getRepository(Chat::class);
		$opentickets = $repo->findBy(array('user' => $id));
		}


		$form = $this->createForm(TalkticketType::class, $Chat);
        $form->handleRequest($request);
		$formTicketList = $this->createForm(TicketStatusType::class, $Ticket);
        $formTicketList->handleRequest($request);

        
        if($form->isSubmitted() && $form->isValid()) //si le form est envoyé:
        {
			

            $Chat->setUser($user);
            $Chat->setTag($id);


            $manager->persist($Chat); //persiste l’info dans le temps
			$manager->flush(); //envoie les info à la BDD

			return $this->redirect($request->getUri());
        }
        

		if($formTicketList->isSubmitted() && $formTicketList->isValid()) //si le form est envoyé:
        {
			
			$idTicket = $id;
		
			$entityManager = $this->getDoctrine()->getManager();
			$Ticket = $entityManager->getRepository(Tickets::class)->find($idTicket);
			
			$status = $formTicketList["status"]->getData();
			//$result = $formTicketList["result"]->getData();
			$Ticket->setStatus($status);
			//$Ticket->setResult($result);

			$entityManager->flush();


			return $this->redirect($request->getUri());
        }
		
		
        return $this->render('main/serviceticket.html.twig',['opentickets' => $opentickets, 'ticketlists' => $ticketlists, 'id' => $id, 'IdUser' => $IdUser, 'NameUser' => $NameUser, 'form' => $form->createView(),  'formTicketList' => $formTicketList->createView() ]);
    }


	/**
     * @Route("/service", name="service")
     */
    public function service(Request $request, ObjectManager $manager, UserPasswordEncoderInterface $encoder, SessionInterface $session)
    {

		$opentickets = "";
		$user = $this->getUser();
		if ($user != NULL){
		$mail =  $user->getEmail();
		

		
		
		$repo = $this->getDoctrine()->getRepository(Tickets::class);
	   
		$opentickets = $repo->findBy(array('user' => $mail));
		}
		$tickets = $repo->FindAll();
		
		
		
		$last = $repo->findBy(array(), array('id' => 'desc'),1,0);
		$TotalTicket = $last[0]->getId();
		


		
		
		
		
        return $this->render('main/service.html.twig', ['tickets' => $tickets, 'TotalTicket' => $TotalTicket, 'opentickets' => $opentickets]);
    }	

}

