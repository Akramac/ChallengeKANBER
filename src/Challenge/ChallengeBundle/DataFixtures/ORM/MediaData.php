<?php

namespace Challenge\ChallengeBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Challenge\ChallengeBundle\Entity\Media;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class MediaData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load (ObjectManager $manager){

    $media1=new Media();
    $media1->setPath('https://www.tekiano.com/wp-content/uploads/2017/11/zara-home.jpg');

    $manager->persist($media1);


    $media2=new Media();
    $media2->setPath('https://fr.dubaibonjour.com/wp-content/uploads/sites/2/2018/04/Stradivarius-Dubai-Mall-Grand-Opening.jpg');

    $manager->persist($media2);


    $media3=new Media();
    $media3->setPath('https://www.leconomistemaghrebin.com/wp-content/uploads/2016/06/Waikiki-l-economiste-maghrebin-1200x700.jpeg');

    $manager->persist($media3);


    $media4=new Media();
    $media4->setPath('http://www.challenge.ma/wp-content/uploads/2016/05/marwa.jpg');

    $manager->persist($media4);


    $media5=new Media();
    $media5->setPath('http://highlights.com.tn/wp-content/uploads/2015/09/magasin-exist.png');

    $manager->persist($media5);


    $media6=new Media();
    $media6->setPath('https://thumbs.dreamstime.com/b/magasin-diesel-sur-kurfuerstendamm-32557823.jpg');

    $manager->persist($media6);


    $media7=new Media();
    $media7->setPath('https://mim.imgix.net/1273681383/861.jpg?w=330&h=220&fit=crop&lossless=1&q=70&auto=format');

    $manager->persist($media7);


    $media8=new Media();
    $media8->setPath('http://www.challenge.ma/wp-content/uploads/2017/03/Orchestra-750x500.jpg');

    $manager->persist($media8);


    $manager->flush();

    $this->addReference('media1',$media1);
    $this->addReference('media2',$media2);
    $this->addReference('media3',$media3);
    $this->addReference('media4',$media4);
    $this->addReference('media5',$media5);
    $this->addReference('media6',$media6);
    $this->addReference('media7',$media7);
    $this->addReference('media8',$media8);
   }
   public function getOrder(){
      return 1;
    }

}
