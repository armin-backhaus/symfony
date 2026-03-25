<?php

namespace App\Controller;

use App\Entity\Armin3;
use App\Form\Armin3Type;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class Armin3Controller extends AbstractController
{
    #[Route('/armin3', name: 'armin3')]
    public function index()
    {
        return $this->render('armin/index3.html.twig', [
            'controller_name' => 'Armin2Controller',
        ]);
    }

    #[Route('/armin3', name: 'armin3')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $armin3 = new Armin3();
        $armin3->setName("Name");

        $armin3Form = $this->createForm(Armin3Type::class, $armin3);
        $armin3Form->handleRequest($request);

        if($armin3Form->isSubmitted() && $armin3Form->isValid()) {
            $entityManager->persist($armin3);
            $entityManager->flush();

            return $this->render('armin/index3.html.twig', [
                'form' => $armin3Form,
            ], new Response(null, 422));
        }

        return $this->render('armin/index3.html.twig', [
            'form' => $armin3Form,
        ]);
    }
    #[Route('/armin3/create', name: 'app_armin3_create', methods: ['POST', 'GET'])]
    public function create(Request $request)
    {
        return new Response("Saved");
    }
}
