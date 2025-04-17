<?php

namespace ContainerC9TB4aA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTurbo_Twig_RuntimeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'turbo.twig.runtime' shared service.
     *
     * @return \Symfony\UX\Turbo\Twig\TurboRuntime
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/RuntimeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-turbo/src/Twig/TurboRuntime.php';

        return $container->privates['turbo.twig.runtime'] = new \Symfony\UX\Turbo\Twig\TurboRuntime(($container->privates['.service_locator.GIuJv7e'] ??= new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [], [])), 'default');
    }
}
