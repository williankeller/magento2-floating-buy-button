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

class FloatingBuyButton extends \Magento\Catalog\Block\Product\AbstractProduct implements \Magento\Widget\Block\BlockInterface
{

    /**
     * @var Product
     */
    protected $_product = null;

    /**
     * @var Data
     */
    protected $_dataHelper = null;

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
        $this->_dataHelper = $helper;
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
        return $this->_dataHelper->getPositions();
    }

}
