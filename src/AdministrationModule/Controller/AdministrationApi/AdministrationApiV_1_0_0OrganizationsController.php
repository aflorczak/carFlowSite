<?php

namespace App\AdministrationModule\Controller\AdministrationApi;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api/administration/v-1-0-0/organizations')]
class AdministrationApiV_1_0_0OrganizationsController extends AbstractController
{
    #[Route(
        '',
        name: 'app_administrationModule_controller_administrationApi_AdministrationApiV-1-0-0_organizations_getOrganizations',
        methods: ['GET']
    )]
    public function getOrganizations(): Response
    {
        return $this->json([],200);
    }
}