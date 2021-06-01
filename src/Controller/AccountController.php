<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/account")
 */
class AccountController extends AbstractController
{
    /**
     * @Route("/")
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