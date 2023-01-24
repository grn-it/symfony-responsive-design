<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Brand;

class BrandFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $brand = new Brand();
        $brand->setName('Puma');
        $manager->persist($brand);

        $brand = new Brand();
        $brand->setName('Tom Tailor');
        $manager->persist($brand);

        $brand = new Brand();
        $brand->setName('Calvin Klein');
        $manager->persist($brand);

        $brand = new Brand();
        $brand->setName('Overcast');
        $manager->persist($brand);

        $brand = new Brand();
        $brand->setName('Nike');
        $manager->persist($brand);

        $brand = new Brand();
        $brand->setName('Tommy Hilfiger');
        $manager->persist($brand);
        
        $manager->flush();
    }
}
