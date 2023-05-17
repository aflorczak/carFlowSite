<?php

namespace App\OrganizationModule\Controller\View;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/{organizationModule}')]
class OrganizationViewController extends AbstractController
{
    #[Route(
        '',
        name: 'app_organizationModule_controller_view_organizationViewController_getOrganizationHomePage',
        methods: ['GET']
    )]
    public function getOrganizationHomePage(): Response
    {
        return $this->render('view/organizationModule/page/home/index.html.twig', []);
    }

    #[Route(
        '/{branch}',
        name: 'app_organizationModule_controller_view_organizationViewController_getOrganizationBranchPage',
        methods: ['GET']
    )]
    public function getOrganizationBranchPage(): Response
    {
        return $this->render('view/organizationModule/page/branch/index.html.twig', []);
    }

    #[Route(
        '/contact',
        name: 'app_organizationModule_controller_view_organizationViewController_getOrganizationContactPage',
        methods: ['GET'],
        priority: 1
    )]
    public function getOrganizationContactPage(): Response
    {
        return $this->render('view/organizationModule/page/contact/index.html.twig', []);
    }
}