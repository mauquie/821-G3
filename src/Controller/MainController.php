<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\TicketType;
use App\Form\TalkticketType;
use App\Entity\TicketList;
use App\Entity\Talkticket;
use App\Entity\User;
use App\Form\TicketStatusType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;  //ajout du request
use Doctrine\Persistence\ObjectManager; //ajout du manager
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Form\RegistrationType;


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
		$Talkticket = new Talkticket();
		
        $form = $this->createForm(TicketType::class, $TicketList);
        $form->handleRequest($request);

		$user = $this->getUser();
		if ($user != NULL){
		$mail =  $user->getId();
		}

        if($form->isSubmitted() && $form->isValid()) //si le form est envoyé:
        {			
			$TicketList->setUserRequest($mail);
			$TicketList->SetStatus("open");
			$TicketList->SetResult("none");
            $manager->persist($TicketList); //persiste l’info dans le temps
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
		$mail =  $user->getId();

		
		
        $repo = $this->getDoctrine()->getRepository(TicketList::class);
		$opentickets = $repo->findBy(array('user_request' => $mail));
	}
		
        return $this->render('main/myticket.html.twig',['opentickets' => $opentickets]);
    }
	
	
	
	
	/**
    * @Route("/myticket/{id}", name="myticketID")
    */
    public function myticketID($id, Request $request, ObjectManager $manager, UserPasswordEncoderInterface $encoder, SessionInterface $session)
    {

		$verif = "";
		$Talkticket = new Talkticket();	
		$Ticket = new TicketList();
		$opentickets = "";
		$user = $this->getUser();
		if ($user != NULL){
		$mail =  $user->getId();
		}
		
		
        $repoTicketList = $this->getDoctrine()->getRepository(TicketList::class);
		$opentickets = $repoTicketList->findBy(array('user_request' => $mail, 'id' => $id));
		$IdUser = $opentickets[0]->getUserRequest();
		
		$repoUser = $this->getDoctrine()->getRepository(User::class);
		$GetNameUser = $repoUser->findBy(array('id' => $IdUser));
		$NameUser = $GetNameUser[0]->getUsername();
		

        $ticketlists = $repoTicketList->findBy(array('id' => $id));

		
		if (isset($opentickets[0])){
		$verif = $opentickets[0]->getUserRequest();
		}
		
		if ($verif != $mail)
		{
		$opentickets = NULL;
		return $this->redirectToRoute('main');

		}else{
			$repoTalkTicket = $this->getDoctrine()->getRepository(Talkticket::class);
			$opentickets = $repoTalkTicket->findBy(array('tag' => $id));
			$form = $this->createForm(TalkticketType::class, $Talkticket);
			$form->handleRequest($request);
			$formTicketList = $this->createForm(TicketStatusType::class, $Ticket);
            $formTicketList->handleRequest($request);
	


        if($form->isSubmitted() && $form->isValid()) //si le form est envoyé:
        {
			$Talkticket->setName($mail);
			$Talkticket->setTag($id);

				

            $manager->persist($Talkticket); //persiste l’info dans le temps
			$manager->flush(); //envoie les info à la BDD

			return $this->redirect($request->getUri());
        }
		
		
		
		if($formTicketList->isSubmitted() && $formTicketList->isValid()) //si le form est envoyé:
        {
			
			 $idTicket = $id;
		
			$entityManager = $this->getDoctrine()->getManager();
			$Ticket = $entityManager->getRepository(TicketList::class)->find($idTicket);
			
			$status = $formTicketList["status"]->getData();
			$result = $formTicketList["result"]->getData();
			$Ticket->setStatus($status);
			$Ticket->setResult($result);

			$entityManager->flush();


			return $this->redirect($request->getUri());
        }
	
	
	
	return $this->render('main/myticketID.html.twig',['opentickets' => $opentickets, 'ticketlists' => $ticketlists , 'id' => $id, 'NameUser' => $NameUser, 'IdUser' => $IdUser, 'form' => $form->createView(), 'formTicketList' => $formTicketList->createView() ]);
}
		
}	
	
		
	/**
     * @Route("/admin", name="admin")
     */
    public function admin(Request $request, ObjectManager $manager, UserPasswordEncoderInterface $encoder)
    {
        $repo = $this->getDoctrine()->getRepository(TicketList::class);
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



        return $this->render('main/admin.html.twig', ['tickets' => $tickets, 'TotalTicket' => $TotalTicket, 'satisfied' => $satisfied, 'discontent' => $discontent, 'form' => $form->createView()]);
    }	
	
	
	/**
    * @Route("/serviceticket/{id}", name="adminticket")
    */
    public function serviceticket($id, Request $request, ObjectManager $manager, UserPasswordEncoderInterface $encoder, SessionInterface $session)
    {
		$Ticket = new TicketList();
		$opentickets = "";
		$user = $this->getUser();
		$repo2 = $this->getDoctrine()->getRepository(TicketList::class);
        $ticketlists = $repo2->findBy(array('id' => $id));



        $repoTicketList = $this->getDoctrine()->getRepository(TicketList::class);
		$opentickets = $repoTicketList->findBy(array('id' => $id));
		$IdUser = $opentickets[0]->getUserRequest();
		
		$repoUser = $this->getDoctrine()->getRepository(User::class);
		$GetNameUser = $repoUser->findBy(array('id' => $IdUser));
		$NameUser = $GetNameUser[0]->getUsername();
		
		

		$Talkticket = new Talkticket();
		if ($user != NULL){
		$mail =  $user->getId();
        $repo = $this->getDoctrine()->getRepository(Talkticket::class);
		$opentickets = $repo->findBy(array('tag' => $id));
		}


        $form = $this->createForm(TalkticketType::class, $Talkticket);
        $form->handleRequest($request);
		$formTicketList = $this->createForm(TicketStatusType::class, $Ticket);
        $formTicketList->handleRequest($request);


        if($form->isSubmitted() && $form->isValid()) //si le form est envoyé:
        {
			

			$Talkticket->setName($mail);
			$Talkticket->setTag($id);


            $manager->persist($Talkticket); //persiste l’info dans le temps
			$manager->flush(); //envoie les info à la BDD

			return $this->redirect($request->getUri());
        }


		if($formTicketList->isSubmitted() && $formTicketList->isValid()) //si le form est envoyé:
        {
			
			 $idTicket = $id;
		
			$entityManager = $this->getDoctrine()->getManager();
			$Ticket = $entityManager->getRepository(TicketList::class)->find($idTicket);
			
			$status = $formTicketList["status"]->getData();
			$result = $formTicketList["result"]->getData();
			$Ticket->setStatus($status);
			$Ticket->setResult($result);

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
		

		
		
		$repo = $this->getDoctrine()->getRepository(TicketList::class);
	   
		$opentickets = $repo->findBy(array('user_request' => $mail));
		}
		$tickets = $repo->FindAll();
		
		
		
		$last = $repo->findBy(array(), array('id' => 'desc'),1,0);
		$TotalTicket = $last[0]->getId();
		


		
		
		
		
        return $this->render('main/service.html.twig', ['tickets' => $tickets, 'TotalTicket' => $TotalTicket, 'opentickets' => $opentickets]);
    }	
}

