<?php

namespace App\DataFixtures;

use App\Entity\Photo;
use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Uid\UuidV4;

class PhotoFixture extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $photo = new Photo();
        $photo->setName(UuidV4::fromString('125195d7-e88c-4e11-b6a9-cdb491d63eb4'));
        $photo->setExtension('jpg');
        $photo->setProduct($manager->getRepository(Product::class)->find(1));
        $manager->persist($photo);

        $photo = new Photo();
        $photo->setName(UuidV4::fromString('bc43283c-309a-4031-8b8f-35c18c18e9a3'));
        $photo->setExtension('jpg');
        $photo->setProduct($manager->getRepository(Product::class)->find(2));
        $manager->persist($photo);

        $photo = new Photo();
        $photo->setName(UuidV4::fromString('0a74f5f1-0023-464d-8876-c87afcca385d'));
        $photo->setExtension('jpg');
        $photo->setProduct($manager->getRepository(Product::class)->find(3));
        $manager->persist($photo);

        $photo = new Photo();
        $photo->setName(UuidV4::fromString('75d280e6-6204-4cd8-ac13-f208e47abdaf'));
        $photo->setExtension('jpg');
        $photo->setProduct($manager->getRepository(Product::class)->find(4));
        $manager->persist($photo);

        $photo = new Photo();
        $photo->setName(UuidV4::fromString('49868f79-6bdc-4f35-ba75-e53ffc39ab1a'));
        $photo->setExtension('jpg');
        $photo->setProduct($manager->getRepository(Product::class)->find(5));
        $manager->persist($photo);

        $photo = new Photo();
        $photo->setName(UuidV4::fromString('d0694c7d-01fc-47a3-af40-536b6e7f5652'));
        $photo->setExtension('jpg');
        $photo->setProduct($manager->getRepository(Product::class)->find(6));
        $manager->persist($photo);
        
        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            ProductFixture::class
        ];
    }
}
