<?php
namespace Sdz\BlogBundle\Controller;

use Sdz\BlogBundle\Entity\Article;
use Sdz\BlogBundle\Entity\Membre;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Sdz\BlogBundle\Antispam\Antispam;


 /**
 * Controlleur permettant de tester Twig
 *
 * @Route("/home")
 */
class BlogController extends Controller
{
	
	 /**
	 * Action index
	 *
	 * @Route("/", name="sdz_blog_home")
	 */
	public function indexAction(){

		$em = $this->getDoctrine()->getManager();
		$articles = new Article();
		$articles = $em->getRepository('SdzBlogBundle:Article')
					   ->findAll();
		
		return $this->render('SdzBlogBundle:Blog:index.html.twig', array('articles' => $articles));
	}

	/**
	 * Action ajouter
	 *
	 * @Route("/ajouter", name="sdz_blog_ajouter")
	 */
	public function ajouterAction(){

		return $this->render('SdzBlogBundle:Blog:ajouter.html.twig');
	}

	public function menuAction($nombre){
		
		$liste = new Article();
		$liste = $this->getDoctrine()
						->getManager()
						->getRepository('SdzBlogBundle:Article')
						->findNews();

		return $this->render('SdzBlogBundle:Blog:menu.html.twig', array(
			'liste_articles' => $liste));
	}

	/**
	 * Action voir
	 *
	 * @Route("/voir/{id}", name="sdz_blog_voir")
	 */
	public function voirAction($id){

		$repository = $this->getDoctrine()
						   ->getManager()
						   ->getRepository('SdzBlogBundle:Article');
		$article = $repository->find($id);

		if ($article === null) {
			throw $this->createNotFoundException('Article [id = ' . $id . ' n\'existe pas]');
		}

		return $this->render('SdzBlogBundle:Blog:voir.html.twig', array(
			'article' => $article));
	}

	public function modifierAction($id){
	$articles = array(
        'titre'   => 'Offre de stage webdesigner',
        'id'      => 1,
        'auteur'  => 'Mathieu',
        'contenu' => 'Nous proposons un poste pour webdesigner. Blabla…',
        'date'    => new \Datetime());

		return $this->render('SdzBlogBundle:Blog:modifier.html.twig', array(
			'articles' => $articles));
	}

	/**
	 * Action service
	 *
	 * @Route("/spam", name="sdz_blog_spam")
	 */
	public function recupText(){
		$contenu = $this->renderView('SdzBlogBundle:Blog:email.txt.twig'); 

		$antispam = $this->container->get('sdz_blog.crawler');

		if ($antispam->isNotSpam($contenu)) {
			return $this->render('SdzBlogBundle:Blog:email.txt.twig');
		}
		else{
			$local = $antispam->getlocal();
			$nbChar = $antispam->getnbChar();
			return new Response('Ce mail est un spam ' . $nbChar);
		}
	}

	/**
	* Action service
	* @Route("/spam1", name="sdz_blog_spam2")
	*/
	public function recupText2(){
		$contenu = $this->renderView('SdzBlogBundle:Blog:email.txt.twig'); 

		$antispam = $this->container->get('sdz_blog.crawler');

		if ($antispam->isNotSpam($contenu)) {
			return $this->render('SdzBlogBundle:Blog:email.txt.twig');
		}
		else{
			$local = $antispam->getlocal();
			$nbChar = $antispam->getnbChar();
			return new Response('Ce mail est un spam ' . $nbChar);
		}
	}
}