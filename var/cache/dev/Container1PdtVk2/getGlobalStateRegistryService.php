<?php

namespace Container1PdtVk2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGlobalStateRegistryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Zenstruck\Foundry\Test\GlobalStateRegistry' shared service.
     *
     * @return \Zenstruck\Foundry\Test\GlobalStateRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/zenstruck/foundry/src/Test/GlobalStateRegistry.php';

        return $container->services['Zenstruck\\Foundry\\Test\\GlobalStateRegistry'] = new \Zenstruck\Foundry\Test\GlobalStateRegistry();
    }
}
