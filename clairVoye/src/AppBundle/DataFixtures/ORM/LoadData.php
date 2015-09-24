<?php

/**
 * Description of LoadData
 *
 * @author Licya
 */

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Citizen;
use AppBundle\Entity\GoldBook;
use AppBundle\Entity\Message;
use AppBundle\Entity\Person;
use Faker\Factory;

class LoadData implements FixtureInterface
{

    /** @var \Faker\Generator */
    private $faker;

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {

        $this->faker = Factory::create('fr_FR');

        for ($i = 0; $i < 10; $i++) {
            //Citizen Entity
            $citizen = new Citizen();
            $citizen->setAuthor($this->faker->word);
            $citizen->setPosition($i);
            $citizen->setPublished(true);
            $citizen->setCitizen($this->faker->sentence());
            $manager->persist($citizen);

            //Person Entity
        }

        for ($j = 0; $j < rand(4, 6); $i++) {

            //GoldBook Entity
            $goldB = new GoldBook();
            $goldB->setName($this->faker->word);
            //$goldB->addMessage($message);
            $goldB->setPublished(true);
            $manager->persist($goldB);


            for ($j = 0; $j < rand(4, 6); $i++) {
                //Person Entity
                $person = new Person();
                $person->setLastname($this->faker->lastName);
                $person->setMail($this->faker->email);
                //$person->addMessage($message);
                $manager->persist($person);

                //Message Entity
                $message = $this->createMessage();
                $message->setPerson($person);
                $manager->persist($message);
            }
            $manager->flush();
        }
    }

    /**
     * 
     * @return Message
     */
    private function createMessage()
    {
        $message = new Message();
        $message->setPublished(true);
        $message->setTitle($this->faker->words(3));
        $message->setTexte($this->faker->sentences());
        $message->setCreated($this->faker->dayOfMonth);

        return $message;
    }

}
