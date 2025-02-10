<?php

namespace Container4dDYsSm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getIngredientApiControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.BFCWt9t.App\Controller\API\IngredientApiController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.BFCWt9t.App\\Controller\\API\\IngredientApiController::index()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'ingredientRepository' => ['privates', 'App\\Repository\\IngredientRepository', 'getIngredientRepositoryService', true],
        ], [
            'ingredientRepository' => 'App\\Repository\\IngredientRepository',
        ]))->withContext('App\\Controller\\API\\IngredientApiController::index()', $container);
    }
}
