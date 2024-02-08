<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

use App\Repository\NormalUserRepository;

class BackendController extends AbstractController
{
    #[Route('/backend', name: 'app_backend')]
    public function index(NormalUserRepository $normalUserRepository): Response
    {
        return $this->render('backend/index.html.twig', [
            'normalUsers' => $normalUserRepository->findAll(),
            'controller_name' => 'BackendController',
        ]);
    }
}
