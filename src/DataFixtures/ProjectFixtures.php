<?php

namespace App\DataFixtures;

use App\Entity\Project;
use Doctrine\Persistence\ObjectManager;

class ProjectFixtures extends BaseFixture
{
    public const PROJECT_REFERENCE = 'project';

    protected function loadData(ObjectManager $manager)
    {
        $this->createMany(9, self::PROJECT_REFERENCE, function () {
            $project = new Project();

            $project
                ->setName($this->faker->company)
                ->setDescription($this->faker->realText(350))
                ->setColor($this->faker->hexColor)
                ->setPriority($this->faker->numberBetween(0, 5))
                ->setCreationDate($this->faker->dateTimeThisYear())
                ->setEndDate($this->faker->dateTimeBetween('now', '6 months'));

            return $project;
        });

        $manager->flush();
    }
}
