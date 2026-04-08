<?php

namespace App\Controller;

use App\Entity\Armin3;
use App\Form\Armin3Type;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class Armin4Controller extends AbstractController
{
    #[Route('armin4', name: 'armin4')]
    public function index()
    {
        return $this->render('armin/index4.html.twig', [
        ]);
    }

#[Route('armin4', name: 'armin4')]
public function new(Request $request, EntityManagerInterface $entityManager): Response
{
    $armin3 = new Armin4();
    $armin3->setName("Name");

    $armin3Form = $this->createForm(Armin4Type::class, $armin4);
    $armin3Form->handleRequest($request);

    if($armin3Form->isSubmitted() && $armin3Form->isValid()) {
        $entityManager->persist($armin3);
        $entityManager->flush();

        return $this->render('armin/index4.html.twig', [
            'form' => $armin4Form,
        ], new Response(null, 422));
    }

    return $this->render('armin/index4.html.twig', [
        'form' => $armin3Form,
    ]);
}
    #[Route('/armin4/create', name: 'app_armin4_create', methods: ['POST', 'GET'])]
    public function create(Request $request)
    {
        return new Response("Saved");
    }

}
