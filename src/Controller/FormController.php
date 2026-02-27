<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

final class FormController extends AbstractController
{
    #[Route('/form', name: 'form')]
    public function index()
    {
        return $this->render('form/index.html.twig', [

        ]);
    }
}
