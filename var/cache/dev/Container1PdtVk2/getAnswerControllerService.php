<?php

namespace Container1PdtVk2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAnswerControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\AnswerController' shared autowired service.
     *
     * @return \App\Controller\AnswerController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/AnswerController.php';

        $container->services['App\\Controller\\AnswerController'] = $instance = new \App\Controller\AnswerController();

        $instance->setContainer(($container->privates['.service_locator.HF_ozI6'] ?? $container->load('get_ServiceLocator_HFOzI6Service'))->withContext('App\\Controller\\AnswerController', $container));

        return $instance;
    }
}
