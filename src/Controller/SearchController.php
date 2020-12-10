<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\NavireRepository;

class SearchController extends AbstractController {

    /**
     * 
     * @Route("home", name="search_home")
     */
    public function goHome(): Response {
        return $this->render('search/home.html.twig', [
                    'controller_name' => 'SearchController',
        ]);
    }

    public function searchBar(): Response {
        $form = $this->createFormBuilder()
                ->setAction($this->generateUrl("search_handlesearch"))
                ->add('cherche', TextType::class)
                ->add('envoiimo', SubmitType::class)
                ->add('envoimmsi', SubmitType::class)
                ->getForm();
        return $this->render('elements/searchbar.html.twig', [
                    'formSearch' => $form->createView()
        ]);
    }

    /**
     * 
     * @Route("/search/handlesearch", name="search_handlesearch")
     */
    public function handleSearch(Request $request, NavireRepository $repo): Response {
        $valeur = $request->request->get('form')['cherche'];
        if (isset($request->request->get('form')['envoiimo'])) {

            $critere = "imo Recherché : " . $valeur;
        } else {

            $critere = "mmsi Recherché : " . $valeur;
        }
        return new Response("<h1> $critere </h1>");
    }

}
