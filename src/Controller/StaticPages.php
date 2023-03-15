<?php
namespace App\Controller;
 
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
 
class StaticPages extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home(): Response
    {
        $titre = 'Bienvenue';
 
        return $this->render('home.html.twig', [
            'titre' => $titre
        ]);
    }

    /**
     * @Route("/legal_notice", name="legal_notice")
     */
    public function legal_notice(): Response
    {
 
        return $this->render('legal_notice.html.twig', [
        ]);
    }
}