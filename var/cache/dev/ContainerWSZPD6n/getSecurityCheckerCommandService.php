<?php

namespace ContainerWSZPD6n;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurityCheckerCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'SensioLabs\Security\Command\SecurityCheckerCommand' shared autowired service.
     *
     * @return \SensioLabs\Security\Command\SecurityCheckerCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/sensiolabs/security-checker/SensioLabs/Security/Command/SecurityCheckerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/sensiolabs/security-checker/SensioLabs/Security/SecurityChecker.php';

        $container->privates['SensioLabs\\Security\\Command\\SecurityCheckerCommand'] = $instance = new \SensioLabs\Security\Command\SecurityCheckerCommand(new \SensioLabs\Security\SecurityChecker());

        $instance->setName('security:check');

        return $instance;
    }
}
