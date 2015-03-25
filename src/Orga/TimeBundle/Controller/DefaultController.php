<?php

namespace Orga\TimeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use \DateTime;

/**
* @Route("/home")
*
*/
class DefaultController extends Controller
{
    
	/**
	* @Route("/", name="orga_time_home")
	*
	*/
    public function indexAction()
    {
        
		$datetime2 = new DateTime('2015-03-24');
		$datetime1 = new DateTime('NOW');
		$interval = $datetime1->diff($datetime2);

        return $this->render('OrgaTimeBundle:Default:index.html.twig', 
        	array(
				'start'    => $datetime2,
				'today'    => $datetime1,
				'interval' => $interval));
    }
}
