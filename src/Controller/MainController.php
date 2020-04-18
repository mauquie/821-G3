<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

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
    public function openticket()
    {

	
		
        return $this->render('main/ticket.html.twig', [

        ]);
    }
	
	
	/**
     * @Route("/admin", name="admin")
     */
    public function admin()
    {

	
		
        return $this->render('main/admin.html.twig', [

        ]);
    }	
}
