<?php

namespace Jvdh\ExtendedCategoryViewSorting\Plugin\Model\Config\Source;

/**
 * Class ListSort
 *
 * This plugin extends the default product listing sorting options
 * by adding a custom "New" sorting attribute.
 *
 * The "afterToOptionArray" method is triggered after the core "toOptionArray" method,
 * allowing us to modify (in this case, append to) the resulting array of sorting options.
 */
class ListSort
{
    /**
     * After plugin for \Magento\Catalog\Model\Config\Source\ListSort::toOptionArray
     *
     * @param \Magento\Catalog\Model\Config\Source\ListSort $subject The original class being plugged into
     * @param array                                         $result  The original return value (sorting options array)
     * @return array                                                 The modified array of sorting options
     */
    public function afterToOptionArray(\Magento\Catalog\Model\Config\Source\ListSort $subject, array $result): array
    {
        // Add a new sorting option labeled "New" with the value "new"
        $result[] = [
            'label' => __('New'),
            'value' => 'new'
        ];

        return $result;
    }
}
