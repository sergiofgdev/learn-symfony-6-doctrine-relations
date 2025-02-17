<?php

namespace Symfony\Config\ZenstruckFoundry\DatabaseResetter;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class OrmConfig 
{
    private $connections;
    private $objectManagers;
    private $resetMode;
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function connections($value): self
    {
        $this->connections = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function objectManagers($value): self
    {
        $this->objectManagers = $value;
    
        return $this;
    }
    
    /**
     * Whether to use doctrine:schema:update or migrations when resetting schema.
     * @default 'schema'
     * @param ParamConfigurator|'schema'|'migrate' $value
     * @return $this
     */
    public function resetMode($value): self
    {
        $this->resetMode = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['connections'])) {
            $this->connections = $value['connections'];
            unset($value['connections']);
        }
    
        if (isset($value['object_managers'])) {
            $this->objectManagers = $value['object_managers'];
            unset($value['object_managers']);
        }
    
        if (isset($value['reset_mode'])) {
            $this->resetMode = $value['reset_mode'];
            unset($value['reset_mode']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->connections) {
            $output['connections'] = $this->connections;
        }
        if (null !== $this->objectManagers) {
            $output['object_managers'] = $this->objectManagers;
        }
        if (null !== $this->resetMode) {
            $output['reset_mode'] = $this->resetMode;
        }
    
        return $output;
    }
    

}
