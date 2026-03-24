<?php

namespace App\Controller;

use App\Entity\Armin2;
use App\Form\Armin2Type;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class Armin2Controller extends AbstractController
{
    #[Route('/armin2', name: 'armin2')]
    public function index()
    {
        return $this->render('armin/index2.html.twig', [
            'controller_name' => 'Armin2Controller',
        ]);
    }

    #[Route('/armin2', name: 'armin2')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $armin2 = new Armin2();
        $armin2->setName("Name");

        $armin2Form = $this->createForm(Armin2Type::class, $armin2);
        $armin2Form->handleRequest($request);

        if($armin2Form->isSubmitted() && $armin2Form->isValid()) {
            $entityManager->persist($armin2);
            $entityManager->flush();

            return $this->render('armin/index2.html.twig', [
                'form' => $armin2Form,
            ], new Response(null, 422));
        }

        return $this->render('armin/index2.html.twig', [
            'form' => $armin2Form,
        ]);
    }
    #[Route('/armin2/create', name: 'app_armin2_create', methods: ['POST', 'GET'])]
    public function create(Request $request)
    {
        return new Response("Saved");
    }
}
