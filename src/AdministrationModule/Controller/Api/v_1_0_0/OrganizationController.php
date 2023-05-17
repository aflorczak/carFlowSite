<?php
namespace App\AdministrationModule\Controller\Api\v_1_0_0;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api/administration/v-1-0-0/organizations')]
class OrganizationController extends AbstractController
{
    #[Route(
        '',
        name: 'app_administrationModule_controller_api_v-1-0-0_organizationController_getOrganizations',
        methods: ['GET']
    )]
    public function getOrganizations(): Response
    {
        return $this->json([], 200);
    }
}