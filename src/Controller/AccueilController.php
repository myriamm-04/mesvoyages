<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Contrôle de la page d'accueil
 *Affiche la page d'accueil du site à partir du template page/accueil.html.twig
 * 
 * @author mymyy
 */
class AccueilController extends AbstractController {
    
    #[Route('/', name: 'accueil')]
    public function index() : Response {
        return $this->render("pages/accueil.html.twig");
    }
}
