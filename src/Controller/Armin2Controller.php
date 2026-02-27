<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

final class Armin2Controller extends AbstractController
{
    #[Route('/armin2', name: 'armin2')]
    public function index()
    {
        return $this->render('armin/index2.html.twig', [

        ]);
    }
}
