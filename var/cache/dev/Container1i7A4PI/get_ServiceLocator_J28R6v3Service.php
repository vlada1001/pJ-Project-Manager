<?php

namespace Container1i7A4PI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_J28R6v3Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.j28R6v3' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.j28R6v3'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'project_id' => ['privates', '.errored..service_locator.j28R6v3.App\\Entity\\Project', NULL, 'Cannot autowire service ".service_locator.j28R6v3": it references class "App\\Entity\\Project" but no such service exists.'],
        ], [
            'project_id' => 'App\\Entity\\Project',
        ]);
    }
}
