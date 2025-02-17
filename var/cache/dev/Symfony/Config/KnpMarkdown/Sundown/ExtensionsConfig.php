<?php

namespace Symfony\Config\KnpMarkdown\Sundown;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class ExtensionsConfig 
{
    private $fencedCodeBlocks;
    private $noIntraEmphasis;
    private $tables;
    private $autolink;
    private $strikethrough;
    private $laxHtmlBlocks;
    private $spaceAfterHeaders;
    private $superscript;
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function fencedCodeBlocks($value): self
    {
        $this->fencedCodeBlocks = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function noIntraEmphasis($value): self
    {
        $this->noIntraEmphasis = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function tables($value): self
    {
        $this->tables = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function autolink($value): self
    {
        $this->autolink = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function strikethrough($value): self
    {
        $this->strikethrough = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function laxHtmlBlocks($value): self
    {
        $this->laxHtmlBlocks = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function spaceAfterHeaders($value): self
    {
        $this->spaceAfterHeaders = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function superscript($value): self
    {
        $this->superscript = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['fenced_code_blocks'])) {
            $this->fencedCodeBlocks = $value['fenced_code_blocks'];
            unset($value['fenced_code_blocks']);
        }
    
        if (isset($value['no_intra_emphasis'])) {
            $this->noIntraEmphasis = $value['no_intra_emphasis'];
            unset($value['no_intra_emphasis']);
        }
    
        if (isset($value['tables'])) {
            $this->tables = $value['tables'];
            unset($value['tables']);
        }
    
        if (isset($value['autolink'])) {
            $this->autolink = $value['autolink'];
            unset($value['autolink']);
        }
    
        if (isset($value['strikethrough'])) {
            $this->strikethrough = $value['strikethrough'];
            unset($value['strikethrough']);
        }
    
        if (isset($value['lax_html_blocks'])) {
            $this->laxHtmlBlocks = $value['lax_html_blocks'];
            unset($value['lax_html_blocks']);
        }
    
        if (isset($value['space_after_headers'])) {
            $this->spaceAfterHeaders = $value['space_after_headers'];
            unset($value['space_after_headers']);
        }
    
        if (isset($value['superscript'])) {
            $this->superscript = $value['superscript'];
            unset($value['superscript']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->fencedCodeBlocks) {
            $output['fenced_code_blocks'] = $this->fencedCodeBlocks;
        }
        if (null !== $this->noIntraEmphasis) {
            $output['no_intra_emphasis'] = $this->noIntraEmphasis;
        }
        if (null !== $this->tables) {
            $output['tables'] = $this->tables;
        }
        if (null !== $this->autolink) {
            $output['autolink'] = $this->autolink;
        }
        if (null !== $this->strikethrough) {
            $output['strikethrough'] = $this->strikethrough;
        }
        if (null !== $this->laxHtmlBlocks) {
            $output['lax_html_blocks'] = $this->laxHtmlBlocks;
        }
        if (null !== $this->spaceAfterHeaders) {
            $output['space_after_headers'] = $this->spaceAfterHeaders;
        }
        if (null !== $this->superscript) {
            $output['superscript'] = $this->superscript;
        }
    
        return $output;
    }
    

}
