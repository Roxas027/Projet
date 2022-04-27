<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ListController extends AbstractController
{
    /**
     * @Route("/list", name="list")
     */


    public function index(): Response
    {
        $companies = [
            'Apple'=>'$1.2 trillion USD',
            'Samsung'=>'$398 billion USD',
            'Microsoft'=>'$1.1 trillion USD',
        ];
        return $this->render('list/index.html.twig', [
            'companies' => $companies,
        ]);
    }
}
