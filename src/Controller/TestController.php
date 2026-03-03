<?php

namespace App\Controller;

use App\Entity\Test;
use App\Form\TestType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

final class TestController extends AbstractController
{
    #[Route('/test', name: 'app_test')]
    public function index()
    {
        $entity = new Test();

        $testForm = $this->createForm(TestType::class, $entity);

        return $this->render('test/index.html.twig', [
            'form' => $testForm,
        ]);
    }
}
