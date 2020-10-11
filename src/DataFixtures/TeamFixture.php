<?php

namespace App\DataFixtures;

use App\Entity\Team;
use Doctrine\Persistence\ObjectManager;


class TeamFixture extends BaseFixture
{
    private UserFixture $userFixture;

    public const TEAM_REFERENCE = 'team';

    /**
     * TeamFixture constructor.
     * @param $userFixture
     */
    public function __construct(UserFixture $userFixture)
    {
        $this->userFixture = $userFixture;
    }

    protected function loadData(ObjectManager $manager)
    {
        $this->createMany(4, self::TEAM_REFERENCE, function () {
            $team = new Team();

            $team->setName($this->faker->jobTitle);
            $team->setDescription($this->faker->realText(50));

//            $team->addUsers($this->getRandomReferences(UserFixture::USER_REFERENCE, 3));

            return $team;
        });

        $manager->flush();
    }
}
