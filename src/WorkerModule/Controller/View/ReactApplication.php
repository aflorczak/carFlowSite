<?php

namespace App\WorkerModule\Controller\View;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/worker-panel')]
class ReactApplication extends AbstractController
{
    #[Route(
        '',
        name: 'app_workerModule_controller_view_reactApplication_getApplication',
        methods: ['GET']
    )]
    public function getApplication(): Response
    {
        return $this->render('view/worker/reactApplication/index.html.twig', []);
    }
}