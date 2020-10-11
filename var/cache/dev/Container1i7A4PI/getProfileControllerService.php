<?php

namespace Container1i7A4PI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProfileControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ProfileController' shared autowired service.
     *
     * @return \App\Controller\ProfileController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ProfileController.php';

        $container->services['App\\Controller\\ProfileController'] = $instance = new \App\Controller\ProfileController(($container->services['security.password_encoder'] ?? $container->load('getSecurity_PasswordEncoderService')), ($container->privates['security.helper'] ?? $container->load('getSecurity_HelperService')));

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\ProfileController', $container));

        return $instance;
    }
}
