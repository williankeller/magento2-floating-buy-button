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

namespace Magestat\FloatingBuyButton\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * Check if module is active.
     *
     * @param null $storeId
     * @return bool
     */
    public function isActive($storeId = null)
    {
        return (bool) $this->getConfigValue(
            'magestat_floatingbuybutton/module/enabled',
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
        return $this->getConfigValue(
            'magestat_floatingbuybutton/options/positions',
            $storeId
        );
    }

    /**
     * Return store configuration value.
     *
     * @param string $path
     * @param int $storeId
     * @return mixed
     */
    public function getConfigValue($path, $storeId = null)
    {
        return $this->scopeConfig->getValue(
            $path,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE,
            $storeId
        );
    }
}
