<?php

namespace Container4dDYsSm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStockApiControllerdeleteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.KVp9dW1.App\Controller\API\StockApiController::delete()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.KVp9dW1.App\\Controller\\API\\StockApiController::delete()'] = ($container->privates['.service_locator.KVp9dW1'] ?? $container->load('get_ServiceLocator_KVp9dW1Service'))->withContext('App\\Controller\\API\\StockApiController::delete()', $container);
    }
}
