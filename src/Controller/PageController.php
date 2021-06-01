<?php


namespace App\Controller;

use ContainerPs7OxBH\getContainer_EnvVarProcessorService;
use http\Env\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PageController extends AbstractController
{
    /**
     * @Route("/", name="page-home")
     *
     * @return Response
     */
    public function home(): Response
    {
        return new Response('Home page');
    }
}


