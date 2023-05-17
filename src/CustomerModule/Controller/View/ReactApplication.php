<?php

namespace App\CustomerModule\Controller\View;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/customer-panel')]
class ReactApplication extends AbstractController
{
    #[Route(
        '',
        name: 'app_customerModule_controller_view_reactApplication_getApplication',
        methods: ['GET']
    )]
    public function getApplication(): Response
    {
        return $this->render('customer/reactApplication/index.html.twig', []);
    }
}