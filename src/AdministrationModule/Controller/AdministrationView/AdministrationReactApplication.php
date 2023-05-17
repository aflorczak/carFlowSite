<?php

namespace App\AdministrationModule\Controller\AdministrationView;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/administration-panel')]
class AdministrationReactApplication extends AbstractController
{
    #[Route(
        '',
        name: 'app_administrationModule_controller_administrationView_AdministrationReactApplication_getApplication',
        methods: ['GET']
    )]
    public function getApplication(): Response
    {
        return $this->render('administrationReactApplication/index.html.twig', []);
    }
}