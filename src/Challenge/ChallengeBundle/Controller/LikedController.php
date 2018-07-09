<?php

namespace Challenge\ChallengeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LikedController extends Controller
{

    public function likedAction()
    {
      if(!$this->getUser()){return $this->redirectToRoute('fos_user_security_login');}
      if($this->getUser()){
        $em=$this->getDoctrine()->getManager();
        $shops=$em->getRepository('ChallengeChallengeBundle:Shops')
        ->createQueryBuilder('Shops')//Shops here is an alias
        ->select('Shops')
        ->orderBy('Shops.distance','ASC')
        ->getQuery()->getResult();

        return $this->render('@ChallengeChallenge/Default/liked/liked.html.twig',array('shops'=>$shops));

      }
    }


     public function dbaddAction($id)
     {
      if(!$this->getUser()){return $this->redirectToRoute('fos_user_security_login');}
      if($this->getUser()){
         $em = $this->getDoctrine()->getManager();
         $shop = $em->getRepository('ChallengeChallengeBundle:Shops')->find($id);

         if (!$shop) {
             throw $this->createNotFoundException(
                 'No shop found for id '.$id
             );
         }

         $shop->setLiked('1');
         $em->flush();

         return $this->redirectToRoute('Liked_shops');
       }
     }

     public function dbsuppAction($id)
     {

     if(!$this->getUser()){return $this->redirectToRoute('fos_user_security_login');}
     if($this->getUser()){
         $em = $this->getDoctrine()->getManager();
         $shop = $em->getRepository('ChallengeChallengeBundle:Shops')->find($id);

         if (!$shop) {
             throw $this->createNotFoundException(
                 'No shop found for id '.$id
             );
         }

         $shop->setLiked('0');
         $em->flush();

         return $this->redirectToRoute('Liked_shops');

     }
   }
}
