<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

/**
 * @Route("/search", name="search")
 */
class SearchController extends AbstractController {

    /**
     * @Route("/search", name="search")
     */
    public function searchBar(): Response {
        $form = $this->createFormBuilder()
                ->add($this->generateUrl("search_handlesearh"))
                ->add('cherche', TextType::class)
                ->add('envoiimo', SubmitType::class)
                ->add('envoimmsi', SubmitType::class)
                ->getForm();
        return $this->render('elements/searchbar.html.twig', [
                    'formSearch' => $form->createView()
        ]);
    }

}
