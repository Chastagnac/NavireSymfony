<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\RegistrationType;
use App\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SecurityController extends AbstractController {

    /**
     * @Route("/inscription", name="security_registration")
     */
    public function Registration(Request $request, EntityManagerInterface $manager,
        UserPasswordEncoderInterface $encoder) {
        $user = new User();
        
        
        //relie les champs du formulaire avec ceux de l'utilisateur
        $form = $this->createForm(RegistrationType::class, $user);
        
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()){
            $hash = $encoder->encodePassword($user, $user->getPassword());
            
            $user->setPassword($hash);
            $manager->persist($user);
            $manager->flush();
            
            return $this->redirectToRoute('security_login');
        }

        return $this->render('security/registration.html.twig', [
                    'form' => $form->createView()
        ]);
    }
    
    /**
     * @Route("/connexion", name="security_login")
     */
    public function login(){
        return $this->render('security/login.html.twig');
    }

}