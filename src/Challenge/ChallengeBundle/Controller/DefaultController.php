<?php

namespace Challenge\ChallengeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
      $em=$this->getDoctrine()->getManager();
      $shops=$em->getRepository('ChallengeChallengeBundle:Shops')->findAll();
      return $this->render('@ChallengeChallenge/Default/index.html.twig',array('shops'=>$shops));
    }
}
