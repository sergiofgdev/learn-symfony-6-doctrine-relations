<?php

namespace Symfony\Config\ZenstruckFoundry\DatabaseResetter;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class OdmConfig 
{
    private $objectManagers;
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function objectManagers($value): self
    {
        $this->objectManagers = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['object_managers'])) {
            $this->objectManagers = $value['object_managers'];
            unset($value['object_managers']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->objectManagers) {
            $output['object_managers'] = $this->objectManagers;
        }
    
        return $output;
    }
    

}
