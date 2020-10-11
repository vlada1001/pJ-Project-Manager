<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixture extends BaseFixture
{
    private UserPasswordEncoderInterface $passwordEncoder;

    public const USER_REFERENCE = 'user';

    /**
     * UserFixture constructor.
     * @param UserPasswordEncoderInterface $passwordEncoder
     */
    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    protected function loadData(ObjectManager $manager)
    {
        $this->createMany(20, self::USER_REFERENCE, function () {
            $user = new User();
            $user->setEmail($this->faker->safeEmail);
            $user->setFirstName($this->faker->firstName);
            $user->setLastName($this->faker->lastName);
            $user->setRegistrationDate($this->faker->dateTimeBetween('-1 year', 'now'));
            $user->setPassword($this->passwordEncoder->encodePassword(
                $user,
                'pwd'
            ));

            return $user;
        });

        $manager->flush();
    }
}
