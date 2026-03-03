<?php

namespace App\Controller;

use App\Entity\FormEntity;
use App\Form\FormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

final class FormController extends AbstractController
{
    #[Route('/form', name: 'form')]
    public function index()
    {
        $entity = new FormEntity();

        $form = $this->createForm(FormType::class, $entity);

        return $this->render('form/index.html.twig', [
            'form' => $form,
        ]);
    }
}
