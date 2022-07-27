<?php

namespace Symfony\Config\SonataTwig\FlashmessageConfig;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class TypesConfig 
{
    private $domain;
    private $_usedProperties = [];

    /**
     * @default 'SonataTwigBundle'
     * @param ParamConfigurator|mixed $value
     * @deprecated The child node "domain" at path "" is deprecated since sonata-project/twig-extensions 1.4 and will be removed in 2.0 version. Translate you message before add it to session flash.
     * @return $this
     */
    public function domain($value): static
    {
        $this->_usedProperties['domain'] = true;
        $this->domain = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('domain', $value)) {
            $this->_usedProperties['domain'] = true;
            $this->domain = $value['domain'];
            unset($value['domain']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['domain'])) {
            $output['domain'] = $this->domain;
        }

        return $output;
    }

}
