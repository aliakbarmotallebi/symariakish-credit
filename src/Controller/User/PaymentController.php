<?php

namespace App\Controller\User;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class PaymentController extends AbstractController
{
    #[Route('/user/payment', name: 'user_payment')]
    public function index()
    {
        return $this->render('user/payments.html.twig', [
            'controller_name' => 'WalletController',
        ]);
    }
}
