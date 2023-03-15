<?php

namespace App\Controller;

use App\Entity\Concerts;
use App\Form\ConcertsType;
use App\Repository\ConcertsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/concerts')]
class ConcertsController extends AbstractController
{
    #[Route('/', name: 'app_concerts_index', methods: ['GET'])]
    public function index(ConcertsRepository $concertsRepository): Response
    {
        return $this->render('concerts/index.html.twig', [
            'concerts' => $concertsRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_concerts_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ConcertsRepository $concertsRepository): Response
    {
        $concert = new Concerts();
        $form = $this->createForm(ConcertsType::class, $concert);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $concertsRepository->save($concert, true);

            return $this->redirectToRoute('app_concerts_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('concerts/new.html.twig', [
            'concert' => $concert,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_concerts_show', methods: ['GET'])]
    public function show(Concerts $concert): Response
    {
        return $this->render('concerts/show.html.twig', [
            'concert' => $concert,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_concerts_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Concerts $concert, ConcertsRepository $concertsRepository): Response
    {
        $form = $this->createForm(ConcertsType::class, $concert);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $concertsRepository->save($concert, true);

            return $this->redirectToRoute('app_concerts_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('concerts/edit.html.twig', [
            'concert' => $concert,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_concerts_delete', methods: ['POST'])]
    public function delete(Request $request, Concerts $concert, ConcertsRepository $concertsRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$concert->getId(), $request->request->get('_token'))) {
            $concertsRepository->remove($concert, true);
        }

        return $this->redirectToRoute('app_concerts_index', [], Response::HTTP_SEE_OTHER);
    }
}
