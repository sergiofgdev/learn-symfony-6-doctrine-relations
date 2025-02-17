<?php

namespace Symfony\Config\KnpMarkdown;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Sundown'.\DIRECTORY_SEPARATOR.'ExtensionsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Sundown'.\DIRECTORY_SEPARATOR.'RenderFlagsConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class SundownConfig 
{
    private $extensions;
    private $renderFlags;
    
    public function extensions(array $value = []): \Symfony\Config\KnpMarkdown\Sundown\ExtensionsConfig
    {
        if (null === $this->extensions) {
            $this->extensions = new \Symfony\Config\KnpMarkdown\Sundown\ExtensionsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "extensions()" has already been initialized. You cannot pass values the second time you call extensions().');
        }
    
        return $this->extensions;
    }
    
    public function renderFlags(array $value = []): \Symfony\Config\KnpMarkdown\Sundown\RenderFlagsConfig
    {
        if (null === $this->renderFlags) {
            $this->renderFlags = new \Symfony\Config\KnpMarkdown\Sundown\RenderFlagsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "renderFlags()" has already been initialized. You cannot pass values the second time you call renderFlags().');
        }
    
        return $this->renderFlags;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['extensions'])) {
            $this->extensions = new \Symfony\Config\KnpMarkdown\Sundown\ExtensionsConfig($value['extensions']);
            unset($value['extensions']);
        }
    
        if (isset($value['render_flags'])) {
            $this->renderFlags = new \Symfony\Config\KnpMarkdown\Sundown\RenderFlagsConfig($value['render_flags']);
            unset($value['render_flags']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->extensions) {
            $output['extensions'] = $this->extensions->toArray();
        }
        if (null !== $this->renderFlags) {
            $output['render_flags'] = $this->renderFlags->toArray();
        }
    
        return $output;
    }
    

}
