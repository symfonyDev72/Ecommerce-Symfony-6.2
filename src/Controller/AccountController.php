<?php

namespace App\Controller;

use App\Form\AccountType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccountController extends AbstractController
{
    #[Route('/account', name: 'app_account')]
    public function index(Request $request, EntityManagerInterface $em): Response
    {

        $user = $this->getUser();
        $form = $this->createForm(AccountType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em->flush();

            $this->addFlash('success', 'Votre compte a bien été mis à jour');
            return $this->redirectToRoute('app_account');
        }

        return $this->render('account/index.html.twig', [
            'title' => 'Mon compte',
            '_route' => $request->attributes->get('_route'),
            'accountForm' => $form->createView()
        ]);
    }
}
