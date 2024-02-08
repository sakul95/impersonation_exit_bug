<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

use App\Entity\AdminUser;
use App\Entity\NormalUser;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $normalUser = new NormalUser();
        $normalUser->setEmail("normal@example.com");
        $normalUser->setPassword('symfony');
        $manager->persist($normalUser);

        $adminUser = new AdminUser();
        $adminUser->setEmail("admin@example.com");
        $adminUser->setPassword('symfony');
        $manager->persist($adminUser);

        $manager->flush();
    }
}
