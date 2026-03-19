<?php

namespace App\Controller;

use App\Entity\Dub;
use App\Form\DubType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class DubController extends AbstractController
{
    #[Route('dub', name: 'app_dub')]
    public function index(): Response
    {
        return $this->render('dub/index.html.twig', [
           'controller_name' => 'DubController',
        ]);
    }

    #[Route('dub', name: 'app_dub', methods: ['POST', 'GET', 'PUT', 'PATCH', 'DELETE', 'HEAD', 'OPTIONS', 'ALL'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $dub = new Dub();
        $dub->setName('Dub');
        $dub->setAge(1);


        $dubForm = $this->createForm(DubType::class, $dub);

        $dubForm->handleRequest($request);

        if ($dubForm->isSubmitted() && $dubForm->isValid()) {
            $entityManager->persist($dub);
            $entityManager->flush();

            return $this->render('dub/index.html.twig', [
                'form' => $dubForm,
                'test' => "written in Db",
            ], new Response(null, 422));
        }

            return $this->render('dub/index.html.twig', [
            'form' => $dubForm,
        ]);
    }

    #[Route('/dub/create', name: 'app_dub_create', methods: ['POST', 'GET', 'PUT', 'PATCH', 'DELETE', 'HEAD', 'OPTIONS', 'ALL'])]
    public function create(Request $request)
    {
        return new Response("Saved");
    }
}
