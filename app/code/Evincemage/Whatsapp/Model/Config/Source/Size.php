<?php

namespace Evincemage\Whatsapp\Model\Config\Source;

class Size implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 's', 'label' => __('Small')],
            ['value' => 'm', 'label' => __('Medium')],
            ['value' => 'l', 'label' => __('Large')]
        ];
    }
}
 