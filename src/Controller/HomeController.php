<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route('/product', name: 'app_product')]
    public function product(): Response
    {
        return $this->render('product.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route('/profil', name: 'app_profil')]
    public function profil(): Response
    {
        return $this->render('profil.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
