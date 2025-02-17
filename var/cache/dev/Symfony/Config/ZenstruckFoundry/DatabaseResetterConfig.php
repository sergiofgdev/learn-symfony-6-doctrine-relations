<?php

namespace Symfony\Config\ZenstruckFoundry;

require_once __DIR__.\DIRECTORY_SEPARATOR.'DatabaseResetter'.\DIRECTORY_SEPARATOR.'OrmConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'DatabaseResetter'.\DIRECTORY_SEPARATOR.'OdmConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class DatabaseResetterConfig 
{
    private $enabled;
    private $orm;
    private $odm;
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enabled($value): self
    {
        $this->enabled = $value;
    
        return $this;
    }
    
    public function orm(array $value = []): \Symfony\Config\ZenstruckFoundry\DatabaseResetter\OrmConfig
    {
        if (null === $this->orm) {
            $this->orm = new \Symfony\Config\ZenstruckFoundry\DatabaseResetter\OrmConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "orm()" has already been initialized. You cannot pass values the second time you call orm().');
        }
    
        return $this->orm;
    }
    
    public function odm(array $value = []): \Symfony\Config\ZenstruckFoundry\DatabaseResetter\OdmConfig
    {
        if (null === $this->odm) {
            $this->odm = new \Symfony\Config\ZenstruckFoundry\DatabaseResetter\OdmConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "odm()" has already been initialized. You cannot pass values the second time you call odm().');
        }
    
        return $this->odm;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['enabled'])) {
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }
    
        if (isset($value['orm'])) {
            $this->orm = new \Symfony\Config\ZenstruckFoundry\DatabaseResetter\OrmConfig($value['orm']);
            unset($value['orm']);
        }
    
        if (isset($value['odm'])) {
            $this->odm = new \Symfony\Config\ZenstruckFoundry\DatabaseResetter\OdmConfig($value['odm']);
            unset($value['odm']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->enabled) {
            $output['enabled'] = $this->enabled;
        }
        if (null !== $this->orm) {
            $output['orm'] = $this->orm->toArray();
        }
        if (null !== $this->odm) {
            $output['odm'] = $this->odm->toArray();
        }
    
        return $output;
    }
    

}
