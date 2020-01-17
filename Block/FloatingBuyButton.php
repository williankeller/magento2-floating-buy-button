<?php

namespace Magestat\FloatingBuyButton\Block;

use Magento\Catalog\Block\Product\AbstractProduct as AbstractProduct;
use Magento\Widget\Block\BlockInterface as BlockInterface;
use Magento\Catalog\Block\Product\Context;
use Magestat\FloatingBuyButton\Helper\Data as HelperData;
use Magento\Framework\Exception\NoSuchEntityException;

/**
 * Class FloatingBuyButton
 * Implementing current Widget block
 */
class FloatingBuyButton extends AbstractProduct implements BlockInterface
{
    /**
     * @var HelperData
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
     * @return mixed
     * @throws NoSuchEntityException
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
