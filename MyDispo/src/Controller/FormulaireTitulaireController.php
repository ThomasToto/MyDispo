<?php

namespace App\Controller;

use App\Entity\FormulaireTitulaire;
use App\Form\FormulaireTitulaireType;
use App\Repository\FormulaireTitulaireRepository;
use App\Repository\CreneauRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use StdClass;

/**
 * @Route("/formulaire/titulaire")
 */
class FormulaireTitulaireController extends AbstractController
{

  /**
   * @Route("/edit", name="formulaire_titulaire_edit", methods={"GET","POST"})
   */
  public function edit(Request $request,CreneauRepository $creneauRepository, FormulaireTitulaireRepository $formtitulaireRepository): Response
  {
      $formulaireTitulaire = $formtitulaireRepository->findAll()[0];
      $form = $this->createForm(FormulaireTitulaireType::class, $formulaireTitulaire);
      $form->handleRequest($request);

      if ($form->isSubmitted() && $form->isValid()) {
          $this->getDoctrine()->getManager()->flush();

          return $this->redirectToRoute('formulaire_titulaire_edit');
      }
$myarray = array();
$events = $creneauRepository->selectStartEndTitleByType("zoneGrisee");
foreach ($events as $event){
  $object = new StdClass;
  $object->title=$event["title"];
  $object->daysOfWeek=date('w',$event["start"]->getTimestamp());
  $object->startTime=$event["start"]->format("H:i:s");
  $object->endTime=$event["end"]->format("H:i:s");
  $myarray[] = $object;
}

$result=json_encode($myarray);

      return $this->render('formulaire_titulaire/parametrage.html.twig', [
          'formulaire_titulaire' => $formulaireTitulaire,
          'events' => $result,
          'form' => $form->createView(),
      ]);
  }

    /**
     * @Route("/new", name="formulaire_titulaire_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $formulaireTitulaire = new FormulaireTitulaire();
        $form = $this->createForm(FormulaireTitulaireType::class, $formulaireTitulaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($formulaireTitulaire);
            $entityManager->flush();

            return $this->redirectToRoute('formulaire_titulaire_index');
        }

        return $this->render('formulaire_titulaire/new.html.twig', [
            'formulaire_titulaire' => $formulaireTitulaire,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="formulaire_titulaire_show", methods={"GET"})
     */
    public function show(FormulaireTitulaire $formulaireTitulaire): Response
    {
        return $this->render('formulaire_titulaire/show.html.twig', [
            'formulaire_titulaire' => $formulaireTitulaire,
        ]);
    }





    /**
     * @Route("/{id}", name="formulaire_titulaire_delete", methods={"DELETE"})
     */
    public function delete(Request $request, FormulaireTitulaire $formulaireTitulaire): Response
    {
        if ($this->isCsrfTokenValid('delete'.$formulaireTitulaire->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($formulaireTitulaire);
            $entityManager->flush();
        }

        return $this->redirectToRoute('formulaire_titulaire_index');
    }
}
