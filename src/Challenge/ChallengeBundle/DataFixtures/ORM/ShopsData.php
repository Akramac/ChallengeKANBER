<?php

namespace Challenge\ChallengeBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Challenge\ChallengeBundle\Entity\Shops;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class ShopsData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load (ObjectManager $manager){

    $shops1=new Shops();
    $shops1->setNom('Zara Home');
    $shops1->setDistance('3');
    $shops1->setLiked('0');
    $shops1->setImage('https://www.tekiano.com/wp-content/uploads/2017/11/zara-home.jpg');
    $manager->persist($shops1);


    $shops2=new Shops();
    $shops2->setNom('Stradivarius');
    $shops2->setDistance('2.4');
    $shops2->setLiked('0');
    $shops2->setImage('https://fr.dubaibonjour.com/wp-content/uploads/sites/2/2018/04/Stradivarius-Dubai-Mall-Grand-Opening.jpg');
    $manager->persist($shops2);


    $shops3=new Shops();
    $shops3->setNom('LC Waikiki');
    $shops3->setDistance('1.7');
    $shops3->setLiked('0');
    $shops3->setImage('https://www.leconomistemaghrebin.com/wp-content/uploads/2016/06/Waikiki-l-economiste-maghrebin-1200x700.jpeg');

    $manager->persist($shops3);


    $shops4=new Shops();
    $shops4->setNom('Marwa');
    $shops4->setDistance('5');
    $shops4->setLiked('0');
    $shops4->setImage('http://www.challenge.ma/wp-content/uploads/2016/05/marwa.jpg');

    $manager->persist($shops4);


    $shops5=new Shops();
    $shops5->setNom('Exist');
    $shops5->setDistance('6');
    $shops5->setLiked('0');
    $shops5->setImage('http://highlights.com.tn/wp-content/uploads/2015/09/magasin-exist.png');

    $manager->persist($shops5);


    $shops6=new Shops();
    $shops6->setNom('Diesel');
    $shops6->setDistance('2');
    $shops6->setLiked('0');
    $shops6->setImage('https://thumbs.dreamstime.com/b/magasin-diesel-sur-kurfuerstendamm-32557823.jpg');

    $manager->persist($shops6);


    $shops7=new Shops();
    $shops7->setNom('Lee Cooper');
    $shops7->setDistance('8');
    $shops7->setLiked('0');
    $shops7->setImage('https://mim.imgix.net/1273681383/861.jpg?w=330&h=220&fit=crop&lossless=1&q=70&auto=format');

    $manager->persist($shops7);


    $shops8=new Shops();
    $shops8->setNom('Orchestre');
    $shops8->setDistance('4');
    $shops8->setLiked('0');
    $shops8->setImage('http://www.challenge.ma/wp-content/uploads/2017/03/Orchestra-750x500.jpg');

    $manager->persist($shops8);


    $manager->flush();

    $this->addReference('shops1',$shops1);
    $this->addReference('shops2',$shops2);
    $this->addReference('shops3',$shops3);
    $this->addReference('shops4',$shops4);
    $this->addReference('shops5',$shops5);
    $this->addReference('shops6',$shops6);
    $this->addReference('shops7',$shops7);
    $this->addReference('shops8',$shops8);
   }
   public function getOrder(){
      return 2;
    }

}
