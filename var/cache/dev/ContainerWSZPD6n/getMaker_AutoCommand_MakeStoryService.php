<?php

namespace ContainerWSZPD6n;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaker_AutoCommand_MakeStoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'maker.auto_command.make_story' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/zenstruck/foundry/src/Bundle/Maker/MakeStory.php';

        $container->privates['maker.auto_command.make_story'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Zenstruck\Foundry\Bundle\Maker\MakeStory(), ($container->privates['maker.file_manager'] ?? $container->load('getMaker_FileManagerService')), ($container->privates['maker.generator'] ?? $container->load('getMaker_GeneratorService')));

        $instance->setName('make:story');

        return $instance;
    }
}
