<?php


namespace App\Controller;

use App\Entity\DataCenter;
use App\Repository\ServerRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/account", name="account_")
 */
class AccountController extends AbstractController
{
    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function dashboard(ServerRepository $repository): Response
    {
        $servers = $repository->findAll();
        return $this->render('Account/dashboard.html.twig', [
            'server_list'=>$servers,
        ]);

    }

    /**
     * @Route("/new-server", name="new-server")
     *
     * @return Response
     */
    public function newServer(): Response
    {
        $form = $this->createFormBuilder()
            ->add('name', TextType::class)
            ->add('location', EntityType::class, [
                'class' =>DataCenter::class,
                'choice_label' => 'name',
            ])
        //->add('password',PasswordType::class)
            ->add('create', SubmitType::class)
            ->getForm();

        return $this->render('Account/new-server.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/profil", name="profil")
     *
     * @return Response
     */
    public function profil(): Response
    {
        return $this->render('Account/profil.html.twig');
    }

    /**
     * @Route("/server-detail", name="server-detail")
     *
     * @return Response
     */
    public function serverDetail(): Response
    {
        return $this->render('Account/server-detail.html.twig');
    }
}