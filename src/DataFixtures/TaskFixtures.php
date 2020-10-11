<?php

namespace App\DataFixtures;

use App\Entity\Task;
use Doctrine\Persistence\ObjectManager;

class TaskFixtures extends BaseFixture
{
    public const TASK_REFERENCE = 'task';

    protected function loadData(ObjectManager $manager)
    {
        $this->createMany(10, self::TASK_REFERENCE, function () {
            $task = new Task();

            $task
                ->setName($this->faker->words(3, true))
                ->setDescription($this->faker->realText(300))
                ->setColor($this->faker->hexColor)
                ->setPriority($this->faker->numberBetween(0, 5))
                ->setCreationDate($this->faker->dateTimeThisYear())
                ->setEndDate($this->faker->dateTimeBetween('now', '6 months'))
                ->setCompleted($this->faker->boolean);

            return $task;
        });

        $manager->flush();
    }
}
