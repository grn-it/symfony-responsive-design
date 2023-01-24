<?php

namespace App\DataFixtures;

use App\Entity\Brand;
use App\Entity\Category;
use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ProductFixture extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $product = new Product();
        $product->setName('Mirage Mox Mono Trainers');
        $product->setPrice(60);
        $product->setPriceOld(70);
        $product->setBrand($manager->getRepository(Brand::class)->findOneBy(['name' => 'Puma']));
        $product->setCategory($manager->getRepository(Category::class)->findOneBy(['name' => 'Shoes']));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Marvin straight jeans');
        $product->setPrice(45);
        $product->setPriceOld(60);
        $product->setBrand($manager->getRepository(Brand::class)->findOneBy(['name' => 'Tom Tailor']));
        $product->setCategory($manager->getRepository(Category::class)->findOneBy(['name' => 'Jeans']));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Slim Organic Cotton Logo T-Shirt');
        $product->setPrice(35);
        $product->setPriceOld(50);
        $product->setBrand($manager->getRepository(Brand::class)->findOneBy(['name' => 'Calvin Klein']));
        $product->setCategory($manager->getRepository(Category::class)->findOneBy(['name' => 'T-shirts']));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Men\'s Blitzing 3.0 Cap');
        $product->setPrice(15);
        $product->setPriceOld(25);
        $product->setBrand($manager->getRepository(Brand::class)->findOneBy(['name' => 'Overcast']));
        $product->setCategory($manager->getRepository(Category::class)->findOneBy(['name' => 'Caps']));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Air Jordan 1 Mid');
        $product->setPrice(50);
        $product->setPriceOld(65);
        $product->setBrand($manager->getRepository(Brand::class)->findOneBy(['name' => 'Nike']));
        $product->setCategory($manager->getRepository(Category::class)->findOneBy(['name' => 'Shoes']));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Ryan Plus');
        $product->setPrice(100);
        $product->setPriceOld(115);
        $product->setBrand($manager->getRepository(Brand::class)->findOneBy(['name' => 'Tommy Hilfiger']));
        $product->setCategory($manager->getRepository(Category::class)->findOneBy(['name' => 'Jeans']));
        $manager->persist($product);
        
        $manager->flush();
    }
    
    public function getDependencies(): array
    {
        return [
            BrandFixture::class,
            CategoryFixture::class
        ];
    }
}
