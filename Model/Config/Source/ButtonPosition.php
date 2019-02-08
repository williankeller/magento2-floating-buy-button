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

namespace Magestat\FloatingBuyButton\Model\Config\Source;

/**
 * @package Magestat\FloatingBuyButton\Model\Config\Source
 */
class ButtonPosition implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Get options as array
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            [
                'value' => 'position-top',
                'label' => __('Display in Top')
            ],
            [
                'value' => 'position-left',
                'label' => __('Display in Left')
            ],
            [
                'value' => 'position-right',
                'label' => __('Display in Right')
            ],
            [
                'value' => 'position-bottom',
                'label' => __('Display in Bottom')
            ]
        ];
    }
}
