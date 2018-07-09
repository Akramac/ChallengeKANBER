<?php
namespace Challenge\ChallengeBundle\Listener;

use Challenge\ChallengeBundle\Controller\LikedController;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class RedirectionListener
{
       protected $authorizationChecker;

       public function __construct(AuthorizationCheckerInterface $authorizationChecker)
       {
           $this->authorizationChecker = $authorizationChecker;
       }

       public function onKernelController(FilterControllerEvent $event)
    {
        $controller = $event->getController();

        if (!$this->authorizationChecker->isGranted('IS_AUTHENTICATED_FULLY')) {
        // echo "<script language='javascript' type='text/javascript'>alert('Please login to continue !') </script>";

        }

    }
}

 ?>
