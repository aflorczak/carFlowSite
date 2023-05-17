<?php

namespace App\AdministrationModule\Controller\View;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/administration-panel')]
class ReactApplicationController extends AbstractController
{
    #[Route(
        '',
        name: 'app_administrationModule_controller_view_reactApplicationController_getApplication',
        methods: ['GET']
    )]
    public function getApplication(): Response
    {
        return $this->render('view/administration/reactApplication/index.html.twig', []);
    }
}