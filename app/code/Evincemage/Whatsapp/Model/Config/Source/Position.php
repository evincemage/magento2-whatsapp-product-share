<?php

namespace Evincemage\Whatsapp\Model\Config\Source;

class Position implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => '1', 'label' => __('Product Detail Section')],
            ['value' => '2', 'label' => __('Bottom of the screen')],
            ['value' => '3', 'label' => __('For Both Section')]
        ];
    }
}
 