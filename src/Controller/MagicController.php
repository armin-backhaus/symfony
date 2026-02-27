<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

final class MagicController extends AbstractController
{
    #[Route('/magic', name: 'magic')]
    public function index()
    {
        return $this->render('armin/indexMagic.html.twig', [

        ]);
    }
}
