<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexMyPageController extends AbstractController
{
    /**
     * @Route("/myPage")
     */
    public function index()
    {
        return $this->render('index_my_page/index.html.twig');
    }
}
