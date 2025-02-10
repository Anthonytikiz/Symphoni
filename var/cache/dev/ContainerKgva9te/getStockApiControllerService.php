<?php

namespace ContainerKgva9te;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStockApiControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\API\StockApiController' shared autowired service.
     *
     * @return \App\Controller\API\StockApiController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'API'.\DIRECTORY_SEPARATOR.'StockApiController.php';

        $container->services['App\\Controller\\API\\StockApiController'] = $instance = new \App\Controller\API\StockApiController(($container->privates['App\\Repository\\StockIngredientRepository'] ?? $container->load('getStockIngredientRepositoryService')), ($container->privates['App\\Repository\\IngredientRepository'] ?? $container->load('getIngredientRepositoryService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')), ($container->privates['serializer'] ?? self::getSerializerService($container)));

        $instance->setContainer(($container->privates['.service_locator.ZyP9f7K'] ?? $container->load('get_ServiceLocator_ZyP9f7KService'))->withContext('App\\Controller\\API\\StockApiController', $container));

        return $instance;
    }
}
