<?php

namespace App\Controller\Security;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminLoginController extends AbstractController
{
    #[Route('/security/admin/login', name: 'app_security_admin_login')]
    public function index(): Response
    {
        return $this->render('security/admin_login/index.html.twig', [
            'controller_name' => 'AdminLoginController',
        ]);
    }
}
