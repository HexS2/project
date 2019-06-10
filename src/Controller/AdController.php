<?php
/**
 * Created by PhpStorm.
 * User: HB
 * Date: 10/06/2019
 * Time: 10:35
 */

namespace App\Controller;


use App\Entity\Ad;
use App\Form\registerAd;
use App\Service\AdService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
class AdController extends AbstractController
{

    /**
     * @Route("/ad", name="ad")
     */
    public function index()
    {
        return $this->render('ad/index.html.twig');
    }

    /**
     * @Route("/ad/new", name="ad_add")
     */
    public function add(AdService $adService, Request $req)
    {
        $ad = new Ad();
        $form = $this->createForm(registerAd::class, $ad);

        $form->handleRequest($req);
        if ($form->isSubmitted() && $form->isValid()) {
            $adService->add($ad);
            return $this->redirectToRoute('ad_show', ['id' => $ad->getId()]);
        }

        return $this->render('ad/add.html.twig', [
            "form" => $form->createView()
        ]);
    }

    /**
     * @Route("/ad/{id}", name="ad_show", requirements={"id"="\d+"})
     */
    public function show(AdService $adService, $id)
    {

        return $this->render('ad/show.html.twig', [
            "ad" => $adService->getOne($id)
        ]);
    }
}