<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Contrôle de la page des voyages 
 * Affiche la page /voyages à partir du template pages/voyages.html.twig
 *
 * @author mymyy
 */
class VoyagesController extends AbstractController{
    
    #[Route('/voyages', name: 'voyages')]
    public function index() : Response {
        return $this->render("pages/voyages.html.twig");
    }
}
