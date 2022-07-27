<?php

namespace Symfony\Config\SonataDoctrineOrmAdmin;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class AuditConfig 
{
    private $force;
    private $_usedProperties = [];

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function force($value): static
    {
        $this->_usedProperties['force'] = true;
        $this->force = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('force', $value)) {
            $this->_usedProperties['force'] = true;
            $this->force = $value['force'];
            unset($value['force']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['force'])) {
            $output['force'] = $this->force;
        }

        return $output;
    }

}