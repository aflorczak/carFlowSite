<?php

namespace App\CustomerModule\Controller\Api\v_1_0_0;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api/customer/v-1-0-0/cars')]
class CarsController extends AbstractController
{
    #[Route(
        '',
        name: 'app_customerModule_controller_api_v-1-0-0_customerModuleApi_v-1-0-0_carsController_getCars',
        methods: ['GET']
    )]
    public function getCars(): Response
    {
        return $this->json([],200);
    }
}