<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReactController extends AbstractController
{
    /**
     * @Route("/salut/{reactRouting}", name="home")
     */
    public function index(): Response
    {
        return $this->render('react/index.html.twig', [

        ]);
    }

}
