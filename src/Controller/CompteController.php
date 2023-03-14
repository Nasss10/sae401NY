<?php

namespace App\Controller;

use App\Repository\PartieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CompteController extends AbstractController
{
    #[Route('/compte', name: 'app_compte')]
    public function index(PartieRepository $partieRepository): Response
    {
        $parties = $partieRepository->findAll();

        return $this->render('compte/index.html.twig', [
            'controller_name' => 'CompteController',
            'parties' => $parties
        ]);
    }
}
