<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $category = new Category();
        $category->setName('Shoes');
        $manager->persist($category);

        $category = new Category();
        $category->setName('Jeans');
        $manager->persist($category);

        $category = new Category();
        $category->setName('T-shirts');
        $manager->persist($category);

        $category = new Category();
        $category->setName('Caps');
        $manager->persist($category);
        
        $manager->flush();
    }
}
