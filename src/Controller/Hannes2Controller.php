<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class Hannes2Controller extends AbstractController
{
    #[Route('/hannes2', name: 'hannes2')]
    final public function sinnvoll(): Response
    {
        return "hello from Hannes2";
    }
}
