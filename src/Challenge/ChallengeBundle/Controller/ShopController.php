<?php

namespace Challenge\ChallengeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ShopController extends Controller
{
    public function shopAction()
    { if(!$this->getUser()){return $this->redirectToRoute('fos_user_security_login');}
      if($this->getUser()){
      $em=$this->getDoctrine()->getManager();
      $shops=$em->getRepository('ChallengeChallengeBundle:Shops')
      ->createQueryBuilder('u')//Shops here is an alias
      ->select('u')
      ->orderBy('u.distance','ASC')
      ->getQuery()->getResult();

      return $this->render('@ChallengeChallenge/Default/shops/shop.html.twig',array('shops'=>$shops));

    }

    }
}
