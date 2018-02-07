<?php

/**
 * Floating Buy Button.
 * Copyright (C) 2018 Magestat (http://magestat.com)
 *
 * This file included in Magestat/FloatingBuyButton is licensed under OSL 3.0
 *
 * http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * Please see LICENSE.txt for the full text of the OSL 3.0 license
 */

namespace Magestat\FloatingBuyButton\Block;

use Magento\Catalog\Block\Product\AbstractProduct as AbstractProduct;
use Magento\Widget\Block\BlockInterface as BlockInterface;

class FloatingBuyButton extends AbstractProduct implements BlockInterface
{

    /**
     * @var Data
     */
    protected $dataHelper = null;

    /**
     * @param \Magento\Catalog\Block\Product\Context $context
     * @param \Magestat\FloatingBuyButton\Helper\Data $helper
     * @param array $data
     */
    public function __construct(
        \Magento\Catalog\Block\Product\Context $context,
        \Magestat\FloatingBuyButton\Helper\Data $helper,
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
    public function getPosition()
    {
        return $this->dataHelper->getPositions();
    }
}
