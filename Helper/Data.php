<?php

namespace Magestat\FloatingBuyButton\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

/**
 * Class Data
 * Responsible to handle all the module configurations from the admin.
 */
class Data extends AbstractHelper
{
    /**
     * Check if module is active.
     *
     * @param null $storeId
     * @return bool
     */
    public function isActive($storeId = null)
    {
        return $this->scopeConfig->isSetFlag(
            'magestat_floatingbuybutton/module/enabled',
            ScopeInterface::SCOPE_STORE,
            $storeId
        );
    }

    /**
     * Return Floating Buy Button position.
     *
     * @param null $storeId
     * @return string
     */
    public function getPositions($storeId = null)
    {
        return $this->scopeConfig->getValue(
            'magestat_floatingbuybutton/options/positions',
            ScopeInterface::SCOPE_STORE,
            $storeId
        );
    }
}
