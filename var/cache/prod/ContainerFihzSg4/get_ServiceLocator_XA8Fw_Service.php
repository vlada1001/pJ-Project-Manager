<?php

namespace ContainerFihzSg4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XA8Fw_Service extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.xA8Fw_.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.xA8Fw_.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'authenticationUtils' => ['services', 'security.authentication_utils', 'getSecurity_AuthenticationUtilsService', true],
        ], [
            'authenticationUtils' => '?',
        ]);
    }
}
