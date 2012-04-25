<?php
// src/Blogger/BlogBundle/DataFixtures/ORM/BlogFixtures.php

namespace Blogger\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Blogger\BlogBundle\Entity\Blog;

class BlogFixtures implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $blog1 = new Blog();
        $blog1->setTitle('Chileans continue protesting against ‘Hinzpeter Law’');
        $blog1->setBlog('Santiago’s youth staged another unauthorized march on Thursday against Interior Minister Rodrigo Hinzpeter’s proposed law to inhibit the country’s ability to assemble publicly. At Plaza Ahumada, around 100 protesters faced off roughly 40 Carabineros, Chile’s uniformed police, before police detained about 50 before any action even took place. “The Hinzpeter Law is an insult to us, saying we can be arrested for up to three years for protesting,” said Universidad Alberto Hurtado student leader Camilla Burgos. “It is necessary for us to march.”
');
        $blog1->setImage('protest.jpg');
        $blog1->setAuthor('Bill Gates');
        $blog1->setTags('protesters, law, hinzpeter');
        $blog1->setCreated(new \DateTime());
        $blog1->setUpdated($blog1->getCreated());
        $manager->persist($blog1);

        $blog2 = new Blog();
        $blog2->setTitle('Chilean senators to get US$4,100 monthly increase for expenses');
        $blog2->setBlog('With social movements throughout the Chile lamenting social inequality and centralized wealth, the announcement that on May 1 Senator expenses will increase by US$4,100 (2,000,000 CHP) monthly has not been welcomed with open arms.  ');
        $blog2->setImage('politics.jpg');
        $blog2->setAuthor('Zero Cool');
        $blog2->setTags('money, politics');
        $blog2->setCreated(new \DateTime());
        $blog2->setUpdated($blog2->getCreated());
        $manager->persist($blog2);

        $blog3 = new Blog();
        $blog3->setTitle('Euromoney says Chile is a safer investment than France or the United Kingdom.');
        $blog3->setBlog('Chile is the safest destination for investment in Latin America, according to a Euromoney Country Risk report released on Monday.

The study shows that Chile has improved nine places since 2011..');
        $blog3->setImage('money.jpg');
        $blog3->setAuthor('Gabriel');
        $blog3->setTags('money, invest');
        $blog3->setCreated(new \DateTime());
        $blog3->setUpdated($blog3->getCreated());
        $manager->persist($blog3);

        $blog4 = new Blog();
        $blog4->setTitle('Mining giant concerned over Chile’s future energy problems');
        $blog4->setBlog('Sustainability issues lie on the horizon for one of the world’s top mining countries.

Diego Hernández, the executive president of Codelco, Chile’s state-owned copper mining company, painted a grim picture for the immediate future of Chile’s mining industry on Monday during a speech at an international mining exposition.');
        $blog4->setImage('mining.jpg');
        $blog4->setAuthor('Steve Jobs');
        $blog4->setTags('mining, money, future, energy');
        $blog4->setCreated(new \DateTime());
        $blog4->setUpdated($blog4->getCreated());
        $manager->persist($blog4);


        $manager->flush();
    }

}