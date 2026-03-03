<?php

namespace App\Controller;

use App\Entity\Test2;
use App\Form\Test2Type;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

final class Test2Controller extends AbstractController
{
    #[Route('/test2', name: 'test2')]
    public function index()
    {
        $entity = new Test2();

        $test = $this->createForm(Test2Type::class, $entity);

        return $this->render('test2/index.html.twig', [
            'form' => $test,
        ]);
    }
}
