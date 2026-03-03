<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

final class Armin3Controller extends AbstractController
{
    #[Route('/armin3', name: 'armin3')]
    public function index()
    {
        return $this->render('armin/index3.html.twig', [
        ]);
    }
}
