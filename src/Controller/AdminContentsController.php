<?php

namespace App\Controller;

use App\Form\AdminProduitType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

class AdminContentsController extends AbstractController
{
    /**
     * @Route("/admin/contents/create", name="admin_contents_create")
     */
    public function create(Request $request, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AdminProduitType::class);


        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $produit = $form->getData();
            $entityManager->persist($produit);
            $entityManager->flush();

            return $this->redirectToRoute('admin_contents');
        }



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
