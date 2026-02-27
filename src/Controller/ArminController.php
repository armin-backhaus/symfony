<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ArminController extends AbstractController
{
    #[Route('/armin', name: 'armin')]
    public function index(): Response
    {
        return $this->render('armin/index.html.twig', [

        ]);
    }
}
