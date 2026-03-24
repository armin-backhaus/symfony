<?php

namespace App\Controller;

use App\Entity\Magic;
use App\Form\MagicType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MagicController extends AbstractController
{
    #[Route('/magic', name: 'magic')]
    public function index()
    {
        return $this->render('magic/index.html.twig', [
            'controller_name' => 'MagicController',
        ]);
    }

#[Route('/magic', name: 'magic')]
public function new(Request $request, EntityManagerInterface $entityManager): Response
{
    $magic = new Magic();
    $magic->setName("Name");

    $magicForm = $this->createForm(MagicType::class, $magic);
    $magicForm->handleRequest($request);

    if($magicForm->isSubmitted() && $magicForm->isValid()) {
        $entityManager->persist($magic);
        $entityManager->flush();

        return $this->render('magic/index.html.twig', [
            'form' => $magicForm,
        ], new Response(null, 422));
    }

        return $this->render('magic/index.html.twig', [
        'form' => $magicForm,
        ]);
    }
    #[Route('/magic/create', name: 'app_magic_create', methods: ['POST', 'GET'])]
    public function create(Request $request)
    {
        return new Response("Saved");
    }
}
