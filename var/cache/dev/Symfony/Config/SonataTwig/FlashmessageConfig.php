<?php

namespace Symfony\Config\SonataTwig;

require_once __DIR__.\DIRECTORY_SEPARATOR.'FlashmessageConfig'.\DIRECTORY_SEPARATOR.'TypesConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class FlashmessageConfig 
{
    private $cssClass;
    private $types;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function cssClass($value): static
    {
        $this->_usedProperties['cssClass'] = true;
        $this->cssClass = $value;

        return $this;
    }

    public function types(string $type, array $value = []): \Symfony\Config\SonataTwig\FlashmessageConfig\TypesConfig
    {
        if (!isset($this->types[$type])) {
            $this->_usedProperties['types'] = true;
            $this->types[$type] = new \Symfony\Config\SonataTwig\FlashmessageConfig\TypesConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "types()" has already been initialized. You cannot pass values the second time you call types().');
        }

        return $this->types[$type];
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('css_class', $value)) {
            $this->_usedProperties['cssClass'] = true;
            $this->cssClass = $value['css_class'];
            unset($value['css_class']);
        }

        if (array_key_exists('types', $value)) {
            $this->_usedProperties['types'] = true;
            $this->types = array_map(function ($v) { return new \Symfony\Config\SonataTwig\FlashmessageConfig\TypesConfig($v); }, $value['types']);
            unset($value['types']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['cssClass'])) {
            $output['css_class'] = $this->cssClass;
        }
        if (isset($this->_usedProperties['types'])) {
            $output['types'] = array_map(function ($v) { return $v->toArray(); }, $this->types);
        }

        return $output;
    }

}
