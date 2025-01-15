<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(): Response
    {
        $age = 0;
        if ($age > 18) {
            print("hey");
        } elseif ($age < 18) {
            print"ho";
        }
        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }
}


