<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'ZenstruckFoundry'.\DIRECTORY_SEPARATOR.'FakerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ZenstruckFoundry'.\DIRECTORY_SEPARATOR.'InstantiatorConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ZenstruckFoundry'.\DIRECTORY_SEPARATOR.'DatabaseResetterConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class ZenstruckFoundryConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $autoRefreshProxies;
    private $faker;
    private $instantiator;
    private $databaseResetter;
    private $globalState;
    
    /**
     * Whether to auto-refresh proxies by default (https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#auto-refresh)
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function autoRefreshProxies($value): self
    {
        $this->autoRefreshProxies = $value;
    
        return $this;
    }
    
    public function faker(array $value = []): \Symfony\Config\ZenstruckFoundry\FakerConfig
    {
        if (null === $this->faker) {
            $this->faker = new \Symfony\Config\ZenstruckFoundry\FakerConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "faker()" has already been initialized. You cannot pass values the second time you call faker().');
        }
    
        return $this->faker;
    }
    
    public function instantiator(array $value = []): \Symfony\Config\ZenstruckFoundry\InstantiatorConfig
    {
        if (null === $this->instantiator) {
            $this->instantiator = new \Symfony\Config\ZenstruckFoundry\InstantiatorConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "instantiator()" has already been initialized. You cannot pass values the second time you call instantiator().');
        }
    
        return $this->instantiator;
    }
    
    public function databaseResetter(array $value = []): \Symfony\Config\ZenstruckFoundry\DatabaseResetterConfig
    {
        if (null === $this->databaseResetter) {
            $this->databaseResetter = new \Symfony\Config\ZenstruckFoundry\DatabaseResetterConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "databaseResetter()" has already been initialized. You cannot pass values the second time you call databaseResetter().');
        }
    
        return $this->databaseResetter;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function globalState($value): self
    {
        $this->globalState = $value;
    
        return $this;
    }
    
    public function getExtensionAlias(): string
    {
        return 'zenstruck_foundry';
    }
            
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['auto_refresh_proxies'])) {
            $this->autoRefreshProxies = $value['auto_refresh_proxies'];
            unset($value['auto_refresh_proxies']);
        }
    
        if (isset($value['faker'])) {
            $this->faker = new \Symfony\Config\ZenstruckFoundry\FakerConfig($value['faker']);
            unset($value['faker']);
        }
    
        if (isset($value['instantiator'])) {
            $this->instantiator = new \Symfony\Config\ZenstruckFoundry\InstantiatorConfig($value['instantiator']);
            unset($value['instantiator']);
        }
    
        if (isset($value['database_resetter'])) {
            $this->databaseResetter = new \Symfony\Config\ZenstruckFoundry\DatabaseResetterConfig($value['database_resetter']);
            unset($value['database_resetter']);
        }
    
        if (isset($value['global_state'])) {
            $this->globalState = $value['global_state'];
            unset($value['global_state']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->autoRefreshProxies) {
            $output['auto_refresh_proxies'] = $this->autoRefreshProxies;
        }
        if (null !== $this->faker) {
            $output['faker'] = $this->faker->toArray();
        }
        if (null !== $this->instantiator) {
            $output['instantiator'] = $this->instantiator->toArray();
        }
        if (null !== $this->databaseResetter) {
            $output['database_resetter'] = $this->databaseResetter->toArray();
        }
        if (null !== $this->globalState) {
            $output['global_state'] = $this->globalState;
        }
    
        return $output;
    }
    

}
