<?php
/**
 * Created by PhpStorm.
 * User: HB
 * Date: 09/06/2019
 * Time: 15:57
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index()
    {
        return $this->render('main/index.html.twig');
    }
}
