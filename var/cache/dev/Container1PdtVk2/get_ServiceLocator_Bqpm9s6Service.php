<?php

namespace Container1PdtVk2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Bqpm9s6Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.bqpm9s6' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.bqpm9s6'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'question' => ['privates', '.errored..service_locator.bqpm9s6.App\\Entity\\Question', NULL, 'Cannot autowire service ".service_locator.bqpm9s6": it references class "App\\Entity\\Question" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'question' => 'App\\Entity\\Question',
        ]);
    }
}
