<?php

namespace Container1i7A4PI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DKKyweZService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.DKKyweZ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.DKKyweZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ProfileController::addTask' => ['privates', '.service_locator.fLx15ph', 'get_ServiceLocator_FLx15phService', true],
            'App\\Controller\\ProfileController::showMyTasks' => ['privates', '.service_locator.fLx15ph', 'get_ServiceLocator_FLx15phService', true],
            'App\\Controller\\ProfileController::showUser' => ['privates', '.service_locator.hEwcf7A', 'get_ServiceLocator_HEwcf7AService', true],
            'App\\Controller\\ProjectController::addTask' => ['privates', '.service_locator.fLx15ph', 'get_ServiceLocator_FLx15phService', true],
            'App\\Controller\\ProjectController::addTaskToDB' => ['privates', '.service_locator.fLx15ph', 'get_ServiceLocator_FLx15phService', true],
            'App\\Controller\\ProjectController::editProject' => ['privates', '.service_locator.j28R6v3', 'get_ServiceLocator_J28R6v3Service', true],
            'App\\Controller\\ProjectController::editProjectToDB' => ['privates', '.service_locator.j28R6v3', 'get_ServiceLocator_J28R6v3Service', true],
            'App\\Controller\\ProjectController::editTask' => ['privates', '.service_locator.A54BwBB', 'get_ServiceLocator_A54BwBBService', true],
            'App\\Controller\\ProjectController::editTaskToDB' => ['privates', '.service_locator.A54BwBB', 'get_ServiceLocator_A54BwBBService', true],
            'App\\Controller\\ProjectController::showProject' => ['privates', '.service_locator.j28R6v3', 'get_ServiceLocator_J28R6v3Service', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.xA8Fw_.', 'get_ServiceLocator_XA8Fw_Service', true],
            'App\\Controller\\SecurityController::register' => ['privates', '.service_locator.rOGcGWE', 'get_ServiceLocator_ROGcGWEService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'App\\Controller\\ProfileController:addTask' => ['privates', '.service_locator.fLx15ph', 'get_ServiceLocator_FLx15phService', true],
            'App\\Controller\\ProfileController:showMyTasks' => ['privates', '.service_locator.fLx15ph', 'get_ServiceLocator_FLx15phService', true],
            'App\\Controller\\ProfileController:showUser' => ['privates', '.service_locator.hEwcf7A', 'get_ServiceLocator_HEwcf7AService', true],
            'App\\Controller\\ProjectController:addTask' => ['privates', '.service_locator.fLx15ph', 'get_ServiceLocator_FLx15phService', true],
            'App\\Controller\\ProjectController:addTaskToDB' => ['privates', '.service_locator.fLx15ph', 'get_ServiceLocator_FLx15phService', true],
            'App\\Controller\\ProjectController:editProject' => ['privates', '.service_locator.j28R6v3', 'get_ServiceLocator_J28R6v3Service', true],
            'App\\Controller\\ProjectController:editProjectToDB' => ['privates', '.service_locator.j28R6v3', 'get_ServiceLocator_J28R6v3Service', true],
            'App\\Controller\\ProjectController:editTask' => ['privates', '.service_locator.A54BwBB', 'get_ServiceLocator_A54BwBBService', true],
            'App\\Controller\\ProjectController:editTaskToDB' => ['privates', '.service_locator.A54BwBB', 'get_ServiceLocator_A54BwBBService', true],
            'App\\Controller\\ProjectController:showProject' => ['privates', '.service_locator.j28R6v3', 'get_ServiceLocator_J28R6v3Service', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.xA8Fw_.', 'get_ServiceLocator_XA8Fw_Service', true],
            'App\\Controller\\SecurityController:register' => ['privates', '.service_locator.rOGcGWE', 'get_ServiceLocator_ROGcGWEService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
        ], [
            'App\\Controller\\ProfileController::addTask' => '?',
            'App\\Controller\\ProfileController::showMyTasks' => '?',
            'App\\Controller\\ProfileController::showUser' => '?',
            'App\\Controller\\ProjectController::addTask' => '?',
            'App\\Controller\\ProjectController::addTaskToDB' => '?',
            'App\\Controller\\ProjectController::editProject' => '?',
            'App\\Controller\\ProjectController::editProjectToDB' => '?',
            'App\\Controller\\ProjectController::editTask' => '?',
            'App\\Controller\\ProjectController::editTaskToDB' => '?',
            'App\\Controller\\ProjectController::showProject' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\SecurityController::register' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\ProfileController:addTask' => '?',
            'App\\Controller\\ProfileController:showMyTasks' => '?',
            'App\\Controller\\ProfileController:showUser' => '?',
            'App\\Controller\\ProjectController:addTask' => '?',
            'App\\Controller\\ProjectController:addTaskToDB' => '?',
            'App\\Controller\\ProjectController:editProject' => '?',
            'App\\Controller\\ProjectController:editProjectToDB' => '?',
            'App\\Controller\\ProjectController:editTask' => '?',
            'App\\Controller\\ProjectController:editTaskToDB' => '?',
            'App\\Controller\\ProjectController:showProject' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\SecurityController:register' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
