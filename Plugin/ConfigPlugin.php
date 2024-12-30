<?php

namespace Jvdh\ExtendedCategoryViewSorting\Plugin;

use Magento\Catalog\Model\Config;

/**
 * Class ConfigPlugin
 *
 * This plugin extends the sorting options used in category view
 * by adding a custom "New" sort option to the array returned from
 * Magento's catalog configuration.
 */
class ConfigPlugin
{
    /**
     * After plugin for \Magento\Catalog\Model\Config::getAttributeUsedForSortByArray
     *
     * @param  Config $catalogConfig  The original catalog configuration model
     * @param  array  $options        The existing sort-by options
     * @return array                  The modified sort-by options, including the new "New" option
     */
    public function afterGetAttributeUsedForSortByArray(Config $catalogConfig, array $options): array
    {
        // Merge a new "New" sorting option into the existing array
        return array_merge($options, ['new' => __("New")]);
    }
}
