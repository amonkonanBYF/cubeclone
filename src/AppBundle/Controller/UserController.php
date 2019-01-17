<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use AppBundle\Entity\User;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;

use Symfony\Component\Security\Core\SecurityContext;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class UserController extends Controller{

 /**
   * @Route("sign", name="sign")
   *
   */

  public function registrationAction( Request $request){

    $user = new User();
    $form =$this->createFormBuilder($user)
                                  ->add('firstName',     TextType::class)
                                  ->add('lastName',      TextType::class)
                                  ->add('description',   TextType::class )
                                  ->add('telephone',     NumberType::class )
                                  ->add('city',          TextType::class)
                                  ->add('country',       CountryType::class)
                                  ->add('email',         EmailType::class)
                                  ->add('password',      PasswordType::class)
                                  ->add('image',         FileType::class)
                                  ->add('save',          SubmitType::class, array('label'=>'inscrit'))
                                  ->getForm();



    $form->handleRequest($request);
    if($form->isSubmitted() && $form->isValid()){

      $em = $this->getDoctrine()->getManager();
      $em->persist($user);
      $em->flush();

      return new Response('vous etes inscrt avec success');

    }

      return $this->render('users/registration.html.twig', array('form'=>$form->createView(),
        )
      );

  }

  /**
   * @Route("login/profil/{id}")
   * @Method("GET")
   *@Template()
   */


  public function profilAction(User $user){

      //$users = new User();
      //$id = $users->getUserId();

      /*$em= $this->getDoctrine()->getManager();
      $user = $em->getRepository(User::class)->findAll();
      dump($user);*/


      return $this->render('Users/profil.html.twig', compact('user'));

  }


  /**
   * @Route("loging")
   */

  public function loginAction(Request $request){

   $user = new User();
    $form = $this->createFormBuilder($user)
                                    ->add('email', EmailType::class)
                                    ->add('password', PasswordType::class)
                                    ->add('save', SubmitType::class, array('label' =>'loging' ))
                                    ->getForm();
    $form->handleRequest($request);
    if($form->isSubmitted() && $form->isValid()){



      $em = $this->getDoctrine()->getManager();
      $em->getRepository(User::class)->findOneBy($user->getId());



}

return $this->render('users/loging.html.twig', array('form'=>$form->createView()));




  }

  /**
   * @Route("admin")
   */

public function adminAction(){

return new Response('<html><body>Admin page!</body></html>');
}




}
