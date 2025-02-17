<?php

namespace Symfony\Config\ZenstruckFoundry;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class FakerConfig 
{
    private $locale;
    private $seed;
    private $service;
    
    /**
     * Change the default faker locale.
     * @example fr_FR
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function locale($value): self
    {
        $this->locale = $value;
    
        return $this;
    }
    
    /**
     * Random number generator seed to produce the same fake values every run
     * @example 1234
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function seed($value): self
    {
        $this->seed = $value;
    
        return $this;
    }
    
    /**
     * Customize the faker service.
     * @example my_faker
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function service($value): self
    {
        $this->service = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['locale'])) {
            $this->locale = $value['locale'];
            unset($value['locale']);
        }
    
        if (isset($value['seed'])) {
            $this->seed = $value['seed'];
            unset($value['seed']);
        }
    
        if (isset($value['service'])) {
            $this->service = $value['service'];
            unset($value['service']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->locale) {
            $output['locale'] = $this->locale;
        }
        if (null !== $this->seed) {
            $output['seed'] = $this->seed;
        }
        if (null !== $this->service) {
            $output['service'] = $this->service;
        }
    
        return $output;
    }
    

}
