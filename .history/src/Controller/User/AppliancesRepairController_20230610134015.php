<?php

namespace App\Controller\User;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class AppliancesRepairController extends AbstractController
{
    #[Route('/user/device/repair', name: 'app_user_device_repair')]
    public function index(): JsonResponse
    {
        return $this->render('user/device_repair.html.twig', [
            'controller_name' => 'WalletController',
        ]);
    }
}
