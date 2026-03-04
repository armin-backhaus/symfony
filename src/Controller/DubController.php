<?php

namespace App\Controller;

use App\Entity\Dub;
use App\Form\DubType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

final class DubController extends AbstractController
{
    #[Route('dub', name: 'app_dub')]
    public function index()
    {
        $entity = new Dub();

        $dubForm = $this->createForm(DubType::class, $entity);

        return $this->render('dub/index.html.twig', [
            'form' => $dubForm,
        ]);
    }
}
