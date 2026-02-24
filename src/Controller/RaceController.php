<?php

namespace App\Controller;

use App\Entity\Race;
use App\Repository\RaceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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

    #[Route('/race/test', name: 'race_test')]
    public function testWriteTodb(RaceRepository $rp, EntityManagerInterface $em): Response
    {
        $newRace = new Race();
        $newRace->setBike("Honda");
        $newRace->setYear("2005");

        $em->persist($newRace);
        $em->flush();

        return new Response('Hello World');
    }
}
