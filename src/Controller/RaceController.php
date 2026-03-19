<?php

namespace App\Controller;

use App\Entity\Race;
use App\Form\RaceType;
use App\Repository\RaceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class RaceController extends AbstractController
{
    #[Route('/race', name: 'app_race')]
    public function index(): Response
    {
        return $this->render('race/index.html.twig', [
            'controller_name' => 'RaceController',
        ]);
    }

    #[Route('/race', name: 'race')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $newRace = new Race();
        $newRace->setBike("Honda");
        $newRace->setYear("2005");

        $newRace = $this->createForm(RaceType::class, $newRace);
        $entityManager->persist($newRace);
        $entityManager->flush();

        if ($newRace->isSubmitted() && $newRace->isValid()) {
            $entityManager->persist($newRace);
            $entityManager->flush();

            return $this->render('race/index.html.twig', [
                'form' => $newRace,
            ], new Response(null, 422));
        }

        return $this->render('race/index.html.twig', [
            'form' => $newRace,
        ]);
    }

    #[Route('/race/create', name: 'app_race_create', methods: ['POST', 'GET'])]
    public function create(Request $request)
    {
        return new Response("Saved");
    }
}
