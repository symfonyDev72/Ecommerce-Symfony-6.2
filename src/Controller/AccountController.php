<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccountController extends AbstractController
{
    #[Route('/account', name: 'app_account')]
    public function index(Request $request): Response
    {
        return $this->render('account/index.html.twig', [
            'title' => 'Mon compte',
            '_route' => $request->attributes->get('_route')
        ]);
    }
}
