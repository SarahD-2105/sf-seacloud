<?php


namespace App\Controller;


use http\Env\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AccountController extends AbstractController
{
    /**
     * @Route ('/')
     *
     */
    public function index(): Response
    {
        return $this->redirectToRoute('account_dashboard');
    }
    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function dashboard(): Response
    {
        return new Response('Tableau de Bord');
    }
    /**
     * @Route("/profil", name="profil")
     */
    public function profil(): Response
    {
        return new Response('Mon profil');
    }

}