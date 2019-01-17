<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\Mission;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;



class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

    $missions = new Mission();

    $em = $this->container->get('doctrine')->getManager();
    $missions = $em->getRepository(Mission::class)->findAll();


    return $this->render('default/index.html.twig',compact('missions'));
    }
    /**
  * @Route("/{id}", name="mission_path", requirements={"id" : "[0-9]+"})
  * @Method("GET")
  */
 public function showAction(Mission $mission){

    return $this->render('missions/show.html.twig',compact('mission'));

 }

 /**
  * @Route("/info", name="info_path")
  *
  */

 public function infoAction(){

    return $this->render('default/info.html.twig');

 }
  /**
  * @Route("/contact", name="contact_path")
  *
  */

 public function contactAction(){

    return $this->render('default/contact.html.twig');

 }



}
