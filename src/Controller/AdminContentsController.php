<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminContentsController extends AbstractController
{
    /**
     * @Route("/admin/contents/create", name="admin_contents_create")
     */
    public function create(): Response
    {
        $form = $this->createForm(AdminProduitType::class);

        return $this->render('admin_contents/create.html.twig', [
            'controller_name' => 'AdminContentsController',
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/admin/contents", name="admin_contents")
     */
    public function index(): Response
    {
        return $this->render('admin_contents/index.html.twig', [
            'controller_name' => 'AdminContentsController',
        ]);
    }
}
