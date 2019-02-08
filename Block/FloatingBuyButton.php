<?php

/**
 * Floating Buy Button.
 * Copyright (C) 2018 Magestat
 *
 * This file included in Magestat/FloatingBuyButton is licensed under OSL 3.0
 *
 * http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * Please see LICENSE.txt for the full text of the OSL 3.0 license
 */

namespace Magestat\FloatingBuyButton\Block;

use Magento\Catalog\Block\Product\AbstractProduct as AbstractProduct;
use Magento\Widget\Block\BlockInterface as BlockInterface;
use Magento\Catalog\Block\Product\Context;
use Magestat\FloatingBuyButton\Helper\Data as HelperData;

class FloatingBuyButton extends AbstractProduct implements BlockInterface
{
    /**
     * @var \Magestat\FloatingBuyButton\Helper\Data
     */
    private $dataHelper = null;

    /**
     * @param Context $context
     * @param HelperData $helper
     * @param array $data
     */
    public function __construct(
        Context $context,
        HelperData $helper,
        array $data = []
    ) {
        $this->dataHelper = $helper;
        parent::__construct($context, $data);
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->_storeManager->getStore()->getCurrentCurrency()->getCode();
    }

    /**
     * @return string
     */
    public function getIsEnabled()
    {
        return $this->dataHelper->isActive();
    }

    /**
     * @return string
     */
    public function getPosition()
    {
        return $this->dataHelper->getPositions();
    }
}
