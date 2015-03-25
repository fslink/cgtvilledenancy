<?php

namespace Orga\TimeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
* @Route("/home")
*
*/
class DefaultController extends Controller
{
    
	/**
	* @Route("/")
	*
	*/
    public function indexAction($name)
    {
        return $this->render('OrgaTimeBundle:Default:index.html.twig');
    }
}
