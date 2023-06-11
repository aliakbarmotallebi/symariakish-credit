<?php

namespace App\Controller\User;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class AppliancesRepairController extends AbstractController
{
    #[Route('/user/appliances/repair', name: 'app_user_appliances_repair')]
    public function index()
    {
        return $this->render('user/appliances_repair.html.twig', [
            'controller_name' => 'WalletController',
        ]);
    }
}
