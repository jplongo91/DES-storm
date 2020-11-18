<?php

namespace App\DataFixtures;

use App\Entity\Produit;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Faker;



class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    
    {

        $faker = Faker\Factory::create('fr_FR');

        for ($i = 0; $i < 5; ++$i); {
            $produit = new Produit();
            $produit->setTitle($faker->name);
            $produit->setDescription($faker->text);
            $produit->setPrice($faker->numberBetween(0, 50));
            $produit->setImageFilename($faker->imageUrl());
            $manager->persist($produit);

        }

        $manager->flush();
    }
}
