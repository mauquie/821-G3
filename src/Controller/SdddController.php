<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SdddController extends AbstractController
{
    /**
     * @Route("/sddd", name="sddd")
     */
    public function index()
    {
        return $this->render('sddd/index.html.twig', [
            'controller_name' => 'SdddController',
        ]);
    }
}
