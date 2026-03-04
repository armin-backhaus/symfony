<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

final class Armin4Controller extends AbstractController
{
    #[Route('armin4', name: 'armin4')]
    public function index()
    {
        return $this->render('armin/index4.html.twig', [
        ]);
    }
}
