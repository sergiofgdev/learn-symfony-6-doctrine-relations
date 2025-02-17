<?php

namespace Symfony\Config\KnpMarkdown\Sundown;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class RenderFlagsConfig 
{
    private $filterHtml;
    private $noImages;
    private $noLinks;
    private $noStyles;
    private $safeLinksOnly;
    private $withTocData;
    private $hardWrap;
    private $xhtml;
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function filterHtml($value): self
    {
        $this->filterHtml = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function noImages($value): self
    {
        $this->noImages = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function noLinks($value): self
    {
        $this->noLinks = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function noStyles($value): self
    {
        $this->noStyles = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function safeLinksOnly($value): self
    {
        $this->safeLinksOnly = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function withTocData($value): self
    {
        $this->withTocData = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function hardWrap($value): self
    {
        $this->hardWrap = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function xhtml($value): self
    {
        $this->xhtml = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['filter_html'])) {
            $this->filterHtml = $value['filter_html'];
            unset($value['filter_html']);
        }
    
        if (isset($value['no_images'])) {
            $this->noImages = $value['no_images'];
            unset($value['no_images']);
        }
    
        if (isset($value['no_links'])) {
            $this->noLinks = $value['no_links'];
            unset($value['no_links']);
        }
    
        if (isset($value['no_styles'])) {
            $this->noStyles = $value['no_styles'];
            unset($value['no_styles']);
        }
    
        if (isset($value['safe_links_only'])) {
            $this->safeLinksOnly = $value['safe_links_only'];
            unset($value['safe_links_only']);
        }
    
        if (isset($value['with_toc_data'])) {
            $this->withTocData = $value['with_toc_data'];
            unset($value['with_toc_data']);
        }
    
        if (isset($value['hard_wrap'])) {
            $this->hardWrap = $value['hard_wrap'];
            unset($value['hard_wrap']);
        }
    
        if (isset($value['xhtml'])) {
            $this->xhtml = $value['xhtml'];
            unset($value['xhtml']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->filterHtml) {
            $output['filter_html'] = $this->filterHtml;
        }
        if (null !== $this->noImages) {
            $output['no_images'] = $this->noImages;
        }
        if (null !== $this->noLinks) {
            $output['no_links'] = $this->noLinks;
        }
        if (null !== $this->noStyles) {
            $output['no_styles'] = $this->noStyles;
        }
        if (null !== $this->safeLinksOnly) {
            $output['safe_links_only'] = $this->safeLinksOnly;
        }
        if (null !== $this->withTocData) {
            $output['with_toc_data'] = $this->withTocData;
        }
        if (null !== $this->hardWrap) {
            $output['hard_wrap'] = $this->hardWrap;
        }
        if (null !== $this->xhtml) {
            $output['xhtml'] = $this->xhtml;
        }
    
        return $output;
    }
    

}
