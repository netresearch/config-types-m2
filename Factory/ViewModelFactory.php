<?php

/**
 * See LICENSE.md for license details.
 */

namespace Netresearch\ConfigFields\Factory;

use Magento\Framework\ObjectManagerInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class ViewModelFactory
{
    /**
     * @var ObjectManagerInterface
     */
    private $objectManager;

    /**
     * ViewModelFactory constructor.
     *
     * @param ObjectManagerInterface $objectManager
     */
    public function __construct(
        ObjectManagerInterface $objectManager
    ) {
        $this->objectManager = $objectManager;
    }

    /**
     * @param string $className
     * @return ArgumentInterface|null
     */
    public function create(string $className): ArgumentInterface
    {
        if (class_exists($className)) {
            return $this->objectManager->create($className);
        }

        return null;
    }
}
