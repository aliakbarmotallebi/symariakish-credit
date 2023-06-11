<?php

namespace App\Controller\User;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ProfileController extends AbstractController
{
    #[Route('/user/profile', name: 'user_profile')]
    public function index()
    {
        return $this->render('user/profile.html.twig', [
            'controller_name' => 'WalletController',
        ]);
    }
}
