<?php

namespace App\Controller\User;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WalletController extends AbstractController
{
    #[Route('/user/wallet', name: 'user_wallet')]
    public function index(): Response
    {
        return $this->render('user/wallets.html.twig', [
            'controller_name' => 'WalletController',
        ]);
    }
}
