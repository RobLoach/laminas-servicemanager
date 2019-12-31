<?php

/**
 * @see       https://github.com/laminas/laminas-servicemanager for the canonical source repository
 * @copyright https://github.com/laminas/laminas-servicemanager/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-servicemanager/blob/master/LICENSE.md New BSD License
 */

namespace LaminasTest\ServiceManager\TestAsset;

use Laminas\ServiceManager\FactoryInterface;
use Laminas\ServiceManager\ServiceLocatorInterface;

class FactoryUsingCreationOptions implements FactoryInterface
{
    /**
     * @var array
     */
    private $creationOptions;

    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        return new Baz($this->creationOptions);
    }

    /**
     * @param array|null $creationOptions
     *
     * @return void
     */
    public function setCreationOptions(array $creationOptions = null)
    {
        $this->creationOptions = $creationOptions;
    }
}