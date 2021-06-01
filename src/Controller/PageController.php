<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    /**
     * @Route("/", name="page_home")
     *
     * @return Response
     */
    public function home(): Response
    {
        return $this->render('Page/home.html.twig');
    }

    /**
     * @Route("/about", name="page_about")
     *
     * @return Response
     */
    public function about(): Response
    {
        return $this->render('Page/about.html.twig');
    }

    /**
     * @Route("/services", name="page_services")
     *
     * @return Response
     */
    public function services(): Response
    {
        return $this->render('Page/services.html.twig');
    }

    /**
     * @Route("/contact", name="page_contact")
     *
     * @return Response
     */
    public function contact(): Response
    {
        return $this->render('Page/contact.html.twig');
    }

    /**
     * @Route("/sign-up", name="page_sign-up")
     *
     * @return Response
     */
    public function signUp(): Response
    {
        return $this->render('Page/sign-up.html.twig');
    }

    /**
     * @Route("/sign-in", name="page_sign-in")
     *
     * @return Response
     */
    public function signIn(): Response
    {
        return $this->render('Page/sign-in.html.twig');
    }
}


