<?php
namespace Sdz\BlogBundle\Controller;

use Sdz\BlogBundle\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;


 /**
 * Controlleur permettant de tester Twig
 *
 * @Route("/test")
 */
class TestTwigController extends Controller
{
	 /** 
	 *     Action index
	 *
	 *     @Route("/")
   *     
   */
  public function indexAction(){
        
    	  $name = 'marc';
        return $this->render('SdzBlogBundle:Blog:email.txt.twig', 
          array('pseudo' => $name));
  }

    /** 
   *     Action recup
   *
   *     @Route("/mail")
   *     
   */
  public function recupAction(){
    	// $contenu = $this->renderView('SdzBlogBundle:Blog:email.txt.twig',
     //        array('pseudo' => 'fslink',
     //              'emploi' => 'agent de change',
     //              'experience' => '15 ans',
     //              'formation' => 'ecole de commerce'));

      $contenu = array(
        'pseudo'     => 'fslink',
        'emploi'     => 'agent de change',
        'experience' => '15 ans',
        'formation'  => 'ecole de commerce');

      $nombres = array('1' => 1,
                       '2' => 2,
                       '3' => 3);

      return $this->render('SdzBlogBundle:Blog:boucle.html.twig', 
        array('contenu' => $contenu,
              'nombres' => $nombres)); 
  }

    /** 
    *     Action testEntity
    *
    *     @Route("/membre")
    *     
    */
  public function testEntityAction(){
      // $en = new Membre();
      // $en->setPseudo('Morpheus');
      // $en->setAge(15);
      $en = new Article();
      $en->setContenu('');
      
      $name = 'Hello';
      $nombres = array('1' => 1,
                       '2' => 2,
                       '3' => 3);

      
      return $this->render('SdzBlogBundle:Blog:email.html.twig',
        array('article'     => $en,
              'salutations' => $name,
              'nombres'     => $nombres));
  }                                         


}