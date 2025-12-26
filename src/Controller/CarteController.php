<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Form\Type\CarteFormType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CarteController extends AbstractController
{
    #[Route('/carte', name: 'app_carte')]
    public function index(): Response
    {
        $Carte = $this->createForm(CarteFormType::class);
        return $this->render('carte/index.html.twig', [
            'controller_name' => 'CarteController',
            'Carte_Form' => $Carte,
        ]);

    }
}
