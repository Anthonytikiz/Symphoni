<?php

namespace Container4dDYsSm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getClientApiControllerfindByIdService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.mjCVlfO.App\Controller\API\ClientApiController::findById()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.mjCVlfO.App\\Controller\\API\\ClientApiController::findById()'] = ($container->privates['.service_locator.mjCVlfO'] ?? $container->load('get_ServiceLocator_MjCVlfOService'))->withContext('App\\Controller\\API\\ClientApiController::findById()', $container);
    }
}
