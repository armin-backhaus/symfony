<?php

namespace App\Controller;

use App\Entity\Armin;
use App\Form\ArminType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ArminController extends AbstractController
{
    #[Route('/armin', name: 'armin')]
    public function index(): Response
    {
        return $this->render('armin/index.html.twig', [
            'controller_name' => 'ArminController',
        ]);
    }

    #[Route('/armin', name: 'armin')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $armin = new Armin();
        $armin->setName("Armin");

        $arminForm = $this->createForm(ArminType::class, $armin);
        $arminForm->handleRequest($request);

        if ($arminForm->isSubmitted() && $arminForm->isValid()) {
            $entityManager->persist($armin);
            $entityManager->flush();

            return $this->render('armin/index.html.twig', [
                'form' => $arminForm,
            ], new Response(null, 422));
        }

        return $this->render('armin/index.html.twig', [
            'form' => $arminForm,
        ]);
    }

    #[Route('/armin/create', name: 'app_armin_create', methods: ['GET', 'POST'])]
    public function create(Request $request)
    {
        return new Response("Saved");
    }
}
