<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use AppBundle\Entity\Mission;
use AppBundle\Entity\Realise;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class MissionsController extends Controller
{
    /**
     * @Route("/missions", name="missions_path")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {

    $missions = new Mission();

    $em = $this->container->get('doctrine')->getManager();
    $missions = $em->getRepository(Mission::class)->findAll();



//dump($missions);
//die();
        return $this->render('missions/item.html.twig',compact('missions'));
    }

 /**
  * @Route("missions/{id}", name="mission_path", requirements={"id" : "[0-9]+"})
  * @Method("GET")
  */

 public function showAction(Mission $mission){

    return $this->render('missions/show.html.twig',compact('mission'));

 }


 /**
  * @Route("/addmission")
  *
  */

public function addAction(Request $request){

    // créer mon objet
    $mission = new Mission();

    // appeler le constructeur du formulaire createFormBuilder
    // puis ajouter les champs

    $form = $this->createFormBuilder($mission)
                        ->add('title',        TextType::class)
                        ->add('activity',   TextType::class)
                        ->add('price',      MoneyType::class)
                        ->add('description',TextType::class)
                        ->add('dateAs',     DateType::class)
                        ->add('expiredOn',  DateType::class)
                        ->add('publish',    CheckboxType::class)
                        ->add('image',      FileType::class)
                        ->add('contenu',    TextareaType::class)
                        ->add('save',       SubmitType::class, array('label' => 'Create Post'))
                        ->getForm();
                ;
// manipuler les requetes avec la methode handleResquest

    $form->handleRequest($request);

    if($form->isSubmitted()){

        $em = $this->getDoctrine()->getManager();
        $em->persist($mission);
        $em->flush();

        return new Response('Mission ajouter');
    }


    return $this->render('missions/addMission.html.twig',  array('form' =>$form->createView(),
    )
   );

}

/**
 *@Route("done")
 */

  public function doneMissionAction( Realise $realise){

    $form = $this->createFormBuilder($realise)
                         ->add();


    //return $this->render('', array(''=>));



  }

}
