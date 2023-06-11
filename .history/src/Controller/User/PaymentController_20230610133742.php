<?php

namespace App\Controller\User;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class PaymentController extends AbstractController
{
    #[Route('/user/payment', name: 'user_payment')]
    public function index(): JsonResponse
    {
        return $this->render('user/payment.html.twig', [
            'controller_name' => 'WalletController',
        ]);
    }
}
