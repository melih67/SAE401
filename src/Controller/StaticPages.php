<?php
namespace App\Controller;
 
use App\Entity\Villes;
use App\Form\VillesType;
use App\Repository\VillesRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
 
class StaticPages extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home(VillesRepository $villesRepository): Response
    {
        return $this->render('villes/index.html.twig', [
            'villes' => $villesRepository->findAll(),
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
    
    /**
     * @Route("/contact", name="contact")
     */
    public function contact(): Response
    {
 
        return $this->render('contact.html.twig', [
        ]);
    }
}