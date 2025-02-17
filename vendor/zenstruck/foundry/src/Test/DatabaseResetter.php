<?php

namespace Zenstruck\Foundry\Test;

use DAMA\DoctrineTestBundle\Doctrine\DBAL\StaticDriver;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpKernel\KernelInterface;
use Zenstruck\Foundry\Configuration;
use Zenstruck\Foundry\Factory;

/**
 * @internal
 *
 * @author Kevin Bond <kevinbond@gmail.com>
 */
final class DatabaseResetter
{
    /** @var bool */
    private static $hasBeenReset = false;

    public static function hasBeenReset(): bool
    {
        return self::$hasBeenReset;
    }

    public static function isDAMADoctrineTestBundleEnabled(): bool
    {
        return \class_exists(StaticDriver::class) && StaticDriver::isKeepStaticConnections();
    }

    public static function resetDatabase(KernelInterface $kernel): void
    {
        if (!$kernel->getContainer()->has('doctrine')) {
            return;
        }

        $databaseResetter = self::createORMDatabaseResetter(self::createApplication($kernel), $kernel);

        $databaseResetter->resetDatabase();

        self::bootFoundry($kernel);

        self::$hasBeenReset = true;
    }

    public static function resetSchema(KernelInterface $kernel): void
    {
        foreach (self::schemaResetters($kernel) as $databaseResetter) {
            $databaseResetter->resetSchema();
        }

        if (self::isDAMADoctrineTestBundleEnabled()) {
            return;
        }

        self::bootFoundry($kernel);
    }

    /** @return array<AbstractSchemaResetter> */
    private static function schemaResetters(KernelInterface $kernel): array
    {
        $application = self::createApplication($kernel);
        $databaseResetters = [];

        if ($kernel->getContainer()->has('doctrine')) {
            $databaseResetters[] = self::createORMDatabaseResetter($application, $kernel);
        }

        if ($kernel->getContainer()->has('doctrine_mongodb')) {
            $databaseResetters[] = self::createODMSchemaResetter($application, $kernel);
        }

        return $databaseResetters;
    }

    private static function bootFoundry(KernelInterface $kernel): void
    {
        $container = $kernel->getContainer();

        if (!Factory::isBooted()) {
            TestState::bootFromContainer($container);
        }

        TestState::flushGlobalState(
            $container->has(GlobalStateRegistry::class) ? $container->get(GlobalStateRegistry::class) : null
        );
    }

    private static function createApplication(KernelInterface $kernel): Application
    {
        $application = new Application($kernel);
        $application->setAutoExit(false);

        return $application;
    }

    private static function createORMDatabaseResetter(Application $application, KernelInterface $kernel): ORMDatabaseResetter
    {
        $container = $kernel->getContainer();
        $configuration = self::getConfiguration($container);

        return new ORMDatabaseResetter(
            $application,
            $container->get('doctrine'),
            $configuration ? $configuration->getOrmConnectionsToReset() : [],
            $configuration ? $configuration->getOrmObjectManagersToReset() : [],
            $configuration ? $configuration->getOrmResetMode() : ORMDatabaseResetter::RESET_MODE_SCHEMA
        );
    }

    private static function createODMSchemaResetter(Application $application, KernelInterface $kernel): ODMSchemaResetter
    {
        $container = $kernel->getContainer();
        $configuration = self::getConfiguration($container);

        return new ODMSchemaResetter(
            $application,
            $container->get('doctrine_mongodb'),
            $configuration ? $configuration->getOdmObjectManagersToReset() : []
        );
    }

    private static function getConfiguration(ContainerInterface $container): ?Configuration
    {
        if ($container->has(Configuration::class)) {
            return $container->get(Configuration::class);
        }

        trigger_deprecation('zenstruck\foundry', '1.23', 'Usage of foundry without the bundle is deprecated and will not be possible anymore in 2.0.');

        return null;
    }
}
