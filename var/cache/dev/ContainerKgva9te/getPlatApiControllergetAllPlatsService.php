<?php

namespace ContainerKgva9te;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPlatApiControllergetAllPlatsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.9T6YsAE.App\Controller\API\PlatApiController::getAllPlats()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.9T6YsAE.App\\Controller\\API\\PlatApiController::getAllPlats()'] = ($container->privates['.service_locator.9T6YsAE'] ?? $container->load('get_ServiceLocator_9T6YsAEService'))->withContext('App\\Controller\\API\\PlatApiController::getAllPlats()', $container);
    }
}
