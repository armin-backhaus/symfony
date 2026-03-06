<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

final class Test3 extends AbstractController
{
    #[Route('/test3', name: 'test3')]
    public function index()
    {
        return $this->render( 'test3/index.html.twig',[
    ]);
    }
}
