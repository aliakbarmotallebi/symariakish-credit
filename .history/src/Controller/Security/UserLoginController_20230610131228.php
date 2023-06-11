<?php

namespace App\Controller\Security;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserLoginController extends AbstractController
{
    #[Route('/security/user/login', name: 'app_security_user_login')]
    public function index(): Response
    {
        return $this->render('security/user_login/index.html.twig', [
            'controller_name' => 'UserLoginController',
        ]);
    }
}
