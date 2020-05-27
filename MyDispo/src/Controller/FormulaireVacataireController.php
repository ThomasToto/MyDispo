<?php

namespace App\Controller;

use App\Entity\FormulaireVacataire;
use App\Form\FormulaireVacataireType;
use App\Repository\FormulaireVacataireRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/formulaire/vacataire")
 */
class FormulaireVacataireController extends AbstractController
{
    /**
     * @Route("/", name="formulaire_vacataire_index", methods={"GET"})
     */
    public function index(FormulaireVacataireRepository $formulaireVacataireRepository): Response
    {
        return $this->render('formulaire_vacataire/index.html.twig', [
            'formulaire_vacataires' => $formulaireVacataireRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="formulaire_vacataire_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $formulaireVacataire = new FormulaireVacataire();
        $form = $this->createForm(FormulaireVacataireType::class, $formulaireVacataire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($formulaireVacataire);
            $entityManager->flush();

            return $this->redirectToRoute('formulaire_vacataire_index');
        }

        return $this->render('formulaire_vacataire/new.html.twig', [
            'formulaire_vacataire' => $formulaireVacataire,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="formulaire_vacataire_show", methods={"GET"})
     */
    public function show(FormulaireVacataire $formulaireVacataire): Response
    {
        return $this->render('formulaire_vacataire/show.html.twig', [
            'formulaire_vacataire' => $formulaireVacataire,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="formulaire_vacataire_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, FormulaireVacataire $formulaireVacataire): Response
    {
        $form = $this->createForm(FormulaireVacataireType::class, $formulaireVacataire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('formulaire_vacataire_index');
        }

        return $this->render('formulaire_vacataire/edit.html.twig', [
            'formulaire_vacataire' => $formulaireVacataire,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="formulaire_vacataire_delete", methods={"DELETE"})
     */
    public function delete(Request $request, FormulaireVacataire $formulaireVacataire): Response
    {
        if ($this->isCsrfTokenValid('delete'.$formulaireVacataire->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($formulaireVacataire);
            $entityManager->flush();
        }

        return $this->redirectToRoute('formulaire_vacataire_index');
    }
}
