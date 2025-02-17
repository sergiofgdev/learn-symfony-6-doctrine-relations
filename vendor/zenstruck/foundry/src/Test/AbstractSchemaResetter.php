<?php

namespace Zenstruck\Foundry\Test;

use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\BufferedOutput;

/**
 * @internal
 */
abstract class AbstractSchemaResetter
{
    abstract public function resetSchema(): void;

    protected function runCommand(Application $application, string $command, array $parameters = []): void
    {
        $exit = $application->run(
            new ArrayInput(\array_merge(['command' => $command], $parameters)),
            $output = new BufferedOutput()
        );

        if (0 !== $exit) {
            throw new \RuntimeException(\sprintf('Error running "%s": %s', $command, $output->fetch()));
        }
    }

    /**
     * @param list<string> $availableObjectsToReset
     * @param list<string> $candidateObjectsToReset
     */
    protected static function validateObjectsToReset(string $objectsType, array $availableObjectsToReset, array $candidateObjectsToReset): void
    {
        if ($invalidObjectsToReset = \array_diff($candidateObjectsToReset, $availableObjectsToReset)) {
            throw new \InvalidArgumentException(\sprintf('Cannot reset %s schema: invalid value "%s" given as %s. Available values are "%s"', ORMDatabaseResetter::class === static::class ? 'ORM' : 'ODM', \json_encode($invalidObjectsToReset), $objectsType, \json_encode($availableObjectsToReset)));
        }
    }
}
