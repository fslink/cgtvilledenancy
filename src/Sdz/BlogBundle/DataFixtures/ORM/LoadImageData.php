<?php

namespace Sdz\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Sdz\BlogBundle\Entity\Image;
use Sdz\BlogBundle\Entity\Article;
use \DateTime;

class LoadImageData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $em)
    {        
        $date = new DateTime('2014-01-02');

        $image = new Image();
        $image->setUrl('samourai.jpg');
        $image->setAlt('image samourai');

        $article = new Article();
        $article->setImage($image);
        $article->setTitre('Les samourais');
        $article->setDate($date);
        $article->setContenu(
            'Les samourais découpent les têtes avec allégresse');
        $article->setAuteur('Kurozawa');

        $em->persist($article);
        $em->flush();

    }
}