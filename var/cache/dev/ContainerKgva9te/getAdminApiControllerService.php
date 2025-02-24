<?php

namespace ContainerKgva9te;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminApiControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\API\AdminApiController' shared autowired service.
     *
     * @return \App\Controller\API\AdminApiController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'API'.\DIRECTORY_SEPARATOR.'AdminApiController.php';

        $container->services['App\\Controller\\API\\AdminApiController'] = $instance = new \App\Controller\API\AdminApiController(($container->privates['App\\Service\\JwtTokenManager'] ??= new \App\Service\JwtTokenManager($container->getEnv('JWT_SECRET_KEY'))));

        $instance->setContainer(($container->privates['.service_locator.ZyP9f7K'] ?? $container->load('get_ServiceLocator_ZyP9f7KService'))->withContext('App\\Controller\\API\\AdminApiController', $container));

        return $instance;
    }
}
