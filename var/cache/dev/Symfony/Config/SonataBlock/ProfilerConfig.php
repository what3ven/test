<?php

namespace Symfony\Config\SonataBlock;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ProfilerConfig 
{
    private $enabled;
    private $template;
    private $_usedProperties = [];

    /**
     * @default '%kernel.debug%'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function enabled($value): static
    {
        $this->_usedProperties['enabled'] = true;
        $this->enabled = $value;

        return $this;
    }

    /**
     * @default '@SonataBlock/Profiler/block.html.twig'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function template($value): static
    {
        $this->_usedProperties['template'] = true;
        $this->template = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('template', $value)) {
            $this->_usedProperties['template'] = true;
            $this->template = $value['template'];
            unset($value['template']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['enabled'])) {
            $output['enabled'] = $this->enabled;
        }
        if (isset($this->_usedProperties['template'])) {
            $output['template'] = $this->template;
        }

        return $output;
    }

}
