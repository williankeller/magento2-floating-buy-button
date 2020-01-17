<?php

namespace Magestat\FloatingBuyButton\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

/**
 * Class ButtonPosition
 * Set possible positions.
 */
class ButtonPosition implements ArrayInterface
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
