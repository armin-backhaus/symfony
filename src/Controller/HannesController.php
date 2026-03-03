<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HannesController extends AbstractController
{
    #[Route('/hannes', name: 'app_hannes')]
    public function index(): Response
    {
        return $this->render('breed/index.html.twig', [
            'controller_name' => 'HannesController',
            'test_var' => 'hello from Hannes',
        ]);
    }
}
