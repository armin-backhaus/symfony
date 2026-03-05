<?php

namespace App\Controller;

use App\Entity\Lena;
use App\Form\LenaType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

final class LenaController extends AbstractController
{
    #[Route('/lena', name: 'app_lena')]
    public function index()
    {
        $entity = new Lena();

        $lenaForm = $this->createForm(LenaType::class, $entity);

        return $this->render('lena/index.html.twig', [
            'form' => $lenaForm,
        ]);
    }
}
